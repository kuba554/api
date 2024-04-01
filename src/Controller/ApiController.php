<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use phpseclib3\Net\SFTP;

class ApiController extends AbstractController
{
    private $params;

    public function __construct(ParameterBagInterface $params)
    {
        $this->params = $params;
    }

    #[Route('/api', name: 'app_api')]
    public function index(): Response
    {
        return $this->render('api/index.html.twig', [
            'controller_name' => 'ApiController',
        ]);
    }

/////////////////////////////////////////////////////////////////////////
//////////////////////////////SHOPER/////////////////////////////////////
/////////////////////////////////////////////////////////////////////////

    // Nowy produkt
    public function post_shoper(array $data) : string {
        $endpoint = 'products';
        $ch = curl_init();
        $token = $this->params->get('api_shoper_token');
        $apiUrl = $this->params->get('api_shoper_url');
        $full_endpoint = $apiUrl . $endpoint;

        $headers = array(
            'Authorization: Bearer ' . $token,
            'Content-Type: application/json'
        );

        curl_setopt($ch, CURLOPT_URL, $full_endpoint);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $response = curl_exec($ch);

        if(curl_error($ch)) {
            echo 'Błąd curl: ' . curl_error($ch);
        }

        return $response;
    }

    public function get_shoper($endpoint, $product_id) {
        $ch = curl_init();
        $token = $this->params->get('api_shoper_token');
        $apiUrl = $this->params->get('api_shoper_url');
        $full_endpoint = $apiUrl . $endpoint . $product_id;

        $headers = array(
            'Authorization: Bearer ' . $token,
            'Content-Type: application/json'
        );

        curl_setopt($ch, CURLOPT_URL, $full_endpoint);
        curl_setopt($ch, CURLOPT_HTTPGET, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);

        if(curl_error($ch)){
            echo 'Błąd curl: ' . curl_error($ch);
        }

        curl_close($ch);

        return $response;
    }

    // Aktualizacja
    public function put_shoper(array $data, $product_id, $endpoint = 'products/') {
        $ch = curl_init();
        $token = $this->params->get('api_shoper_token');
        $apiUrl = $this->params->get('api_shoper_url');
        $full_endpoint = $apiUrl . $endpoint . $product_id;

        $headers = array(
            'Authorization: Bearer ' . $token,
            'Content-Type: application/json'
        );
            
        curl_setopt($ch, CURLOPT_URL, $full_endpoint); 
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT'); 
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $response = curl_exec($ch);

        if(curl_error($ch)){
            return 'Błąd curl: ' . curl_error($ch);
        }
        
        curl_close($ch);

        return 'Response_put_shoper: ' . $response;
    }
    
    public function delete_shoper($endpoint, $product_id) {
        $token = $this->params->get('api_shoper_token');
        $apiUrl = $this->params->get('api_shoper_url');
        $full_endpoint = $apiUrl . $endpoint . $product_id;
        $ch = curl_init($full_endpoint);
        
        $headers = array(
            'Authorization: Bearer ' . $token,
            'Content-Type: application/json'
        );

        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'DELETE');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $response = curl_exec($ch);

        if(curl_error($ch)){
            echo 'Błąd curl: ' . curl_error($ch);
        }
        
        curl_close($ch);

        return $response;
    }

/////////////////////////////////////////////////////////////////////////
///////////////////////////////B2B///////////////////////////////////////
/////////////////////////////////////////////////////////////////////////
    public function post_b2b(array $data) {
        $endpoint = 'products';
        $ch = curl_init();
        $consumer_key = $this->params->get('api_b2b_customers_key');
        $consumer_secret = $this->params->get('api_customers_secret');
        $apiUrl = $this->params->get('api_b2b_url');
        $full_endpoint = $apiUrl . $endpoint;

        $headers = array(
            'Content-Type: application/json',
            'Authorization: Basic ' . base64_encode($consumer_key . ':' . $consumer_secret),
        );

        curl_setopt($ch, CURLOPT_URL, $full_endpoint);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $response = curl_exec($ch);

        if(curl_error($ch)) {
            echo 'Błąd curl: ' . curl_error($ch);
        }

        return 'ResponseB2B:' . $response . $full_endpoint;
    }

    public function get_b2b($endpoint, $product_id) {
        $ch = curl_init();
        $token = $this->params->get('api_b2b_token');
        $apiUrl = $this->params->get('api_b2b_url');
        $full_endpoint = $apiUrl . $endpoint . $product_id;

        $headers = array(
            'Authorization: Bearer ' . $token,
            'Content-Type: application/json'
        );

        curl_setopt($ch, CURLOPT_URL, $full_endpoint);
        curl_setopt($ch, CURLOPT_HTTPGET, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);

        if(curl_error($ch)){
            echo 'Błąd curl: ' . curl_error($ch);
        }

        curl_close($ch);

        return $response;
    }

    public function put_b2b(array $data, $product_id) {
        $endpoint = 'products/';
        $ch = curl_init();
        $consumer_key = $this->params->get('api_b2b_customers_key');
        $consumer_secret = $this->params->get('api_customers_secret');
        $apiUrl = $this->params->get('api_b2b_url');
        $full_endpoint = $apiUrl . $endpoint . $product_id;

        $headers = array(
            'Content-Type: application/json',
            'Authorization: Basic ' . base64_encode($consumer_key . ':' . $consumer_secret),
        );
            
        curl_setopt($ch, CURLOPT_URL, $full_endpoint); 
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT'); 
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $response = curl_exec($ch);

        if(curl_error($ch)){
            echo 'Błąd curl: ' . curl_error($ch);
        }
        
        curl_close($ch);

        return 'PUT_b2b: ' . $response;
    }
    
    public function delete_b2b($endpoint, $product_id) {
        $token = $this->params->get('api_b2b_token');
        $apiUrl = $this->params->get('api_b2b_url');
        $full_endpoint = $apiUrl . $endpoint . $product_id;
        $ch = curl_init($full_endpoint);
        
        $headers = array(
            'Authorization: Bearer ' . $token,
            'Content-Type: application/json'
        );

        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'DELETE');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $response = curl_exec($ch);

        if(curl_error($ch)){
            echo 'Błąd curl: ' . curl_error($ch);
        }
        
        curl_close($ch);

        return $response;
    }
// public function upload_file_b2b($file) {
//     $sftp_server = new SFTP('145.239.86.113');
//     $sftp_username = 'mlabaz';
//     $sftp_pass = '@n7q5=c_MM?k';
    
//     if (!$sftp_server->login($sftp_username, $sftp_pass)) {
//         throw new \Exception('Błąd logowania do serwera SFTP');
//     } else {
//         // Zmiana znaków ukośników wstecznych na ukośniki proste
//         $local_path = str_replace('\\', '/', $this->getParameter('kernel.project_dir') . '/public/uploads/') . $file;
//         //$local_path = $this->getParameter('kernel.project_dir') . '/public/uploads/' . $file;
//         $remote_path = '/public_html/wp-content/uploads/2024';
        
//         //Sprawdź prawa dostępu do katalogu na serwerze
//         $permissions = $sftp_server->stat($remote_path);
//         if (!$permissions) {
//             throw new \Exception('Nie można uzyskać informacji o uprawnieniach do zapisu na serwerze SFTP');
//         }
        
//         // Sprawdź, czy użytkownik ma uprawnienia do zapisu (prawa 02xxx lub 06xxx)
//         if (($permissions['mode'] & 00006) == 0) {
//             throw new \Exception('Użytkownik nie ma uprawnień do zapisu w katalogu na serwerze SFTP');
//         }
        
//         if (!$sftp_server->put($remote_path . $file, $local_path, SFTP::SOURCE_LOCAL_FILE)) {
//             $error = $sftp_server->getLastSFTPError();
//             throw new \Exception('Błąd przesyłania pliku na serwer SFTP: ' . $error . 'path: ' . $local_path);
//         }
//     }
    
//     return 'Plik został przesłany na serwer SFTP.';
// }


    // public function upload_file_b2b($file) {
    //     $ftp_username = 'mlabaz';
    //     $ftp_userpass = '@n7q5=c_MM?k';
    //     $ftp_server = '145.239.86.113';
    //     $remoteFilePath = '/public_html/wp-content/uploads/2024/03' . basename($file); // Ścieżka docelowa na serwerze FTP
    
    //     // Nawiązanie połączenia z serwerem FTP z wykorzystaniem protokołu SSL
    //     $ftp_conn = ftp_ssl_connect($ftp_server);
    //     if (!$ftp_conn) {
    //         return 'Błąd połączenia FTP';
    //     }
    
    //     // Logowanie na serwerze FTP
    //     $login = ftp_login($ftp_conn, $ftp_username, $ftp_userpass);
    //     if (!$login) {
    //         ftp_close($ftp_conn);
    //         return 'Błąd logowania FTP';
    //     }
    
    //     // Przesłanie pliku na serwer FTP
    //     if (ftp_put($ftp_conn, $remoteFilePath, $file, FTP_BINARY)) {
    //         ftp_close($ftp_conn);
    //         return 'Plik został przesłany poprawnie na serwer FTP';
    //     } else {
    //         ftp_close($ftp_conn);
    //         return 'Błąd przesyłania pliku na serwer FTP';
    //     }
    // }      
}
