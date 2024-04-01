<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Command;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use App\Entity\Product;
use DateTime;

#[AsCommand(
    name: 'app:download-product',
    description: 'Add a short description for your command',
)]
class DownloadProductCommand extends Command
{
    public function __construct(EntityManagerInterface $em)
    {
        parent::__construct();
        $this->em = $em;
    }

    public function execute(InputInterface $input, OutputInterface $output): int
    {
        $ch = curl_init();

        $token = '';
        $api_url = '';
        $endpoint = '/products';
        $page_number = 1;
        $limit = 20;
        $dateFormat = 'Y-m-d H:i:s';
        $productRepository = $this->em->getRepository(Product::class);
        
        $highestIdProduct = $productRepository->countProducts();

        if ($highestIdProduct) {
            $highestId = $highestIdProduct / $limit;
            $page_number = floor($highestId);
        } else {
            $page_number = 1;
        }
        
        $headers = array(
            'Authorization: Bearer ' . $token,
            'Content-Type: application/json'
        );

        $query_params = http_build_query(array('page' => $page_number, 'limit' => $limit));
        $full_endpoint = $endpoint . '?' . $query_params;
        
        curl_setopt($ch, CURLOPT_URL, $api_url . $full_endpoint);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);

        if ($response === false) {
            echo 'Błąd zapytania: ' . curl_error($ch);
        } else {
            //$data = json_decode($response, true);
            //echo json_encode($data, JSON_PRETTY_PRINT);

            $data = json_decode($response, true);
            do {
                    foreach ($data['list'] as $item) {
                        $existingProduct = $productRepository->findOneBy(['product_id' => $item['product_id']]);
        
                        if ($existingProduct) {
                            continue;
                        }
                            $product = new Product();
                            $product->setProductId($item['product_id']);
                            $product->setSKU($item['code']);

                            $appDateTime = DateTime::createFromFormat($dateFormat, $item['edit_date']);
                            $product->setDateEdit($appDateTime);

                            $product->setEAN($item['ean']);
                            $product->setPriceSuggested($item['stock']['price']);
                            $product->setPriceWholesale($item['stock']['price_wholesale']);
                            $product->setName($item['translations']['pl_PL']['name']);
                            $product->setDescription($item['translations']['pl_PL']['description']);
                            $product->setImage($item['main_image']['name']);
                            $product->setAttributes(json_encode($item['attributes']));
                            $product->setGfxId($item['main_image']['gfx_id']);
                            $product->setStock($item['stock']);
                            $product->setOptions($item['options']);
                            $product->setProducerId($item['producer_id']);
                            $product->setTranslations($item['translations']);
                            $product->setMainImage($item['main_image']);
                            $product->setTaxId($item['tax_id']);
                            $product->setCategoryId($item['category_id']);
                            $product->setCategories($item['categories']);
                            //$product->setPage($data['page']);
                                                
                            $this->em->persist($product);
                    }
                    $this->em->flush();
                    $page_number++;

                    print_r($query_params = http_build_query(array('page' => $page_number, 'limit' => $limit)));
                    $full_endpoint = $endpoint . '?' . $query_params;
                    
                    curl_setopt($ch, CURLOPT_URL, $api_url . $full_endpoint);
                    $response = curl_exec($ch);

                    if ($response === false) {
                        echo 'Błąd zapytania: ' . curl_error($ch);
                        break; // Przerwanie w przypadku błędu
                    } else {
                        $data = json_decode($response, true);
                    }
                // sleep(1);
                } while ($page_number <= $data['pages']);
        }
        curl_close($ch);
        return Command::SUCCESS;
    }
}
