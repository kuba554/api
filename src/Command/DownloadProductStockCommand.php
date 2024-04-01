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
use App\Entity\ProductStock;

#[AsCommand(
    name: 'app:download-product-stock',
    description: 'Add a short description for your command',
)]
class DownloadProductStockCommand extends Command
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
        $endpoint = '/product-stocks';
        $page_number = 1;
        $limit = 20; 

        $headers = array(
            'Authorization: Bearer ' . $token,
            'Content-Type: application/json'
        );

        $productStockRepository = $this->em->getRepository(ProductStock::class);
        
        $highestIdProductStock = $productStockRepository->countStocks();

        if ($highestIdProductStock) {
            $highestId = $highestIdProductStock / $limit;
            $page_number = floor($highestId);
        } else {
            $page_number = 1;
        }
        print_r($page_number);

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
                    $existingStock = $productStockRepository->findOneBy(['product_id' => $item['product_id']]);
    
                    if ($existingStock) {
                        continue;
                    }
                        $stock = new ProductStock();
                        $stock->setStockId($item['stock_id']);
                        $stock->setProductId($item['product_id']);
                        $stock->setPrice($item['price']);
                        $stock->setExtended($item['extended']);
                        $stock->setPriceType($item['price_type']);
                        $stock->setActive($item['active']);
                        $stock->setDefaultStock($item['default']);
                        $stock->setStock($item['stock']);
                        $stock->setWarnLevel($item['warn_level']);
                        $stock->setSold($item['sold']);
                        $stock->setCode($item['code']);
                        $stock->setEan($item['ean']);
                        $stock->setWeight($item['weight']);
                        $stock->setWeightType($item['weight_type']);
                        $stock->setAvailiabilityId($item['availability_id']);
                        $stock->setDeliveryId($item['delivery_id']);
                        $stock->setGfxId($item['gfx_id']);
                        $stock->setOptions($item['options']);
                        $stock->setPackage($item['package']);
                        $stock->setPriceWholesale($item['price_wholesale']);
                        $stock->setPriceSpecial($item['price_special']);
                        $stock->setPriceTypeSpecial($item['price_type_special']);
                        $stock->setPriceBuying($item['price_buying']);
                        $stock->setCalculationUnitId($item['calculation_unit_id']);
                        $stock->setCalculationUnitRatio($item['calculation_unit_ratio']);
                        $stock->setHistoricalLowestPrice($item['historical_lowest_price']);
                        $stock->setWholesaleHistoricalLowestPrice($item['wholesale_historical_lowest_price']);
                        $stock->setSpecialHistoricalLowestPrice($item['special_historical_lowest_price']);
                        
                        
                
                        $this->em->persist($stock);
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
