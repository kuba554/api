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
use App\Entity\ProductImages;

#[AsCommand(
    name: 'app:dwonload-images',
    description: 'Add a short description for your command',
)]
class DwonloadImagesCommand extends Command
{
    public function __construct(EntityManagerInterface $em)
    {
        parent::__construct();
    $this->em = $em;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $ch = curl_init();

        $token = '';
        $api_url = '';
        $endpoint = '/product-images';
        $page_number = 1;
        $limit = 50; 

        $headers = array(
            'Authorization: Bearer ' . $token,
            'Content-Type: application/json'
        );

        $imageRepository = $this->em->getRepository(ProductImages::class);
        $highestIdImage = $imageRepository->countImages();

        if ($highestIdImage) {
            $highestId = $highestIdImage / $limit - 1;
            $page_number = floor($highestId);
        } else {
            $page_number = 1;
        }

        $query_params = http_build_query(array('page' => $page_number));
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
                    $existingImage = $imageRepository->findOneBy(['product_id' => $item['product_id']]);
    
                    if ($existingImage) {
                        continue;
                    }
                        $image = new ProductImages();
                        $image->setGfxId($item['gfx_id']);
                        $image->setProductId($item['product_id']);
                        $image->setMain($item['main']);
                        $image->setOrderSord($item['order']);
                        $image->setName($item['name']);
                        $image->setUnicName($item['unic_name']);
                        $image->setHidden($item['hidden']);
                        $image->setExtension($item['extension']);
                        $image->setTranslations($item['translations']);

                
                        $this->em->persist($image);
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