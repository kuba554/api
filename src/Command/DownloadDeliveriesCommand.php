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
use App\Entity\Deliveries;

#[AsCommand(
    name: 'app:download-deliveries',
    description: 'Add a short description for your command',
)]
class DownloadDeliveriesCommand extends Command
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
        $endpoint = '/deliveries';
        $page_number = 1;
        $limit = 20; 

        $headers = array(
            'Authorization: Bearer ' . $token,
            'Content-Type: application/json'
        );

        $deliveriesRepo = $this->em->getRepository(Deliveries::class);

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
                    $existingDel = $deliveriesRepo->findOneBy(['delivery_id' => $item['delivery_id']]);
    
                    if ($existingDel) {
                        continue;
                    }
                        $delivery = new Deliveries();
                        $delivery->setDeliveryId($item['delivery_id']);
                        $delivery->setHours($item['hours']);
                        $delivery->setDays($item['days']);
                        $delivery->setTranslations($item['translations']);
                        
                        $this->em->persist($delivery);
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
