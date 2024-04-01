<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Controller\Admin;

use App\Controller\ApiController;
use App\Entity\OptionValue;
use App\Entity\Product;
use App\Entity\ProductStock;
use App\Form\ProductType;
use App\Repository\ProductRepository;
use App\Entity\Attributes;
use Attribute;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Console\Application;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\BufferedOutput;
use Symfony\Component\HttpFoundation\ParameterBag;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\KernelInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\String\Slugger\Urlizer;
use App\Entity\Units;
use App\Entity\Taxes;



#[Route('/admin/product')]
final class ProductController extends AbstractController
{
    // private $productCommand;

    // public function __construct(DownloadProducersCommand $productCommand)
    // {
    //     $this->productCommand;
    // }
    #[Route('/', name: 'admin_index', methods: ['GET'])]
    #[Route('/', name: 'app_product_index', methods: ['GET'])]
    public function index(Request $request, ProductRepository $productRepository, PaginatorInterface $paginator): Response
    {
        $products = $productRepository->findBy([], ['product_id' => 'DESC']);

        $pagination = $paginator->paginate(
            $products,
            $request->query->getInt('page', 1),
            10
        );

        return $this->render('admin/product/index.html.twig', [
            'pagination' => $pagination,
        ]);
    }

    #[Route('/new', name: 'app_product_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, ApiController $api, LoggerInterface $logger): Response
    {
        $product = new Product();
        $units = new Units();
        $taxes = new Taxes();
        $form = $this->createForm(ProductType::class, $product);
        $form->handleRequest($request);
        $infoShoper = $request->query->get('info_shoper');
        $infoB2b = $request->query->get('info_b2b');

        if ($form->isSubmitted() && $form->isValid()) {
            // /** @var UploadedFile $uploadedFile */
            // $uploadedFile = $form['image']->getData();
            // $destination = $this->getParameter('kernel.project_dir').'/public/uploads';
            // $originalFilename = pathinfo($uploadedFile->getClientOriginalName(), PATHINFO_FILENAME);
            // $newFilename = $originalFilename . '-' . uniqid() . '.' .$uploadedFile->guessExtension();
            // $uploadedFile->move(
            //     $destination,
            //     $newFilename
            // );

            $taxes = $form['taxes']->getData()->getTaxId();
            $units = $form['units']->getData()->getUnitId();  

            $data_shoper = [
                'category_id' => $form['category_id']->getData(),
                'producer_id' => $form['producer_id']->getData(),
                'name' => $form['name']->getData(),
                'code' => $form['SKU']->getData(),
                'ean' => $form['EAN']->getData(),
                'delivery' => $form['delivery_time']->getData(),
                'pkwiu' => '0',
                'translations' => [
                    'pl_PL' => [
                        'name' => $form['name']->getData(),
                        'active' => $form['stock_active']->getData(),
                        'description' => $form['description']->getData(),
                    ],
                ],
                'stock' => [
                    'weight' => $form['stock_weight']->getData(),
                    'price_wholesale' => $form['price_wholesale']->getData(),
                    'price' => $form['price_suggested']->getData(),
                    'stock' => $form['stock_stock']->getData(),
                ],
                'tax_id' => $taxes,
                'unit_id' => $units,
            ];

            $data_b2b = [
                'name' => $form['name']->getData(),
                'status' => $form['stock_active']->getData() == true ? 'publish' : 'draft',
                'type' => $form['product_type']->getData() == 0 ? 'simple' : 'variable',
                'description' => $form['description']->getData(),
                'short_description' => '',
                'price' => $form['price_wholesale']->getData(),
                'regular_price' => (string)$form['price_wholesale']->getData(),
                'categories' => [
                    [
                        'id' => 2436,
                    ]
                ],
                'meta_data' => [
                    [
                        'key' => '_sku',
                        'value' => $form['SKU']->getData(),
                    ],
                    [
                        'key' => '_ean',
                        'value' => $form['EAN']->getData(),
                    ],
                    [
                        'key'=> '_suggested_price',
                        'value' => $form['price_suggested']->getData(),
                    ],
                    [
                        'key' => '_delivery_time',
                        'value' => $form['delivery_time']->getData(),
                    ]
                ],
                // 'images' => [
                //         [
                //             'src' => 'http://demo.woothemes.com/woocommerce/wp-content/uploads/sites/56/2013/06/T_2_front.jpg',
                //         ],
                //         [
                //             'src' => 'http://demo.woothemes.com/woocommerce/wp-content/uploads/sites/56/2013/06/T_2_back.jpg'
                //         ],
                //         [
                //             'src' => 'http://demo.woothemes.com/woocommerce/wp-content/uploads/sites/56/2013/06/T_2_back.jpg'
                //         ],
                //         [
                //             'src' => 'http://demo.woothemes.com/woocommerce/wp-content/uploads/sites/56/2013/06/T_2_back.jpg'
                //         ],
                //         [
                //             'src' => 'http://demo.woothemes.com/woocommerce/wp-content/uploads/sites/56/2013/06/T_2_back.jpg'
                //         ]
                //     ],
            ];

            // $infoShoper = $logger->info(json_encode($api->post_shoper($data_shoper)));
            // $infoShoper = json_decode($infoShoper);
            $infoShoper = $api->post_shoper($data_shoper);
            // $infoB2b = $logger->info(json_encode($api->post_b2b($data_b2b)));
            
            // $product->setTranslations($data_shoper['translations']);
            // // $product->setDeliveryTime((string)$form['delivery_time']->getData());
            // $entityManager->persist($product);
            // $entityManager->flush();
            // $infoShoper = 'dupa';

            return $this->redirectToRoute('app_product_new', [
                'info_shoper' => $infoShoper,
                'info_b2b' => $infoB2b,
            ], Response::HTTP_SEE_OTHER);
        }

        return $this->render('admin/product/new.html.twig', [
            'info_shoper' => $infoShoper,
            'info_b2b' => $infoB2b,
            'product' => $product,
            'form' => $form,
        ]);
    }

    #[Route('/', name: 'app_product_show', methods: ['GET'])]
    public function show(Product $product): Response
    {
        return $this->render('product/show.html.twig', [
            'product' => $product,
        ]);
    }

    #[Route('/{product_id}/edit', name: 'app_product_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Product $product, EntityManagerInterface $entityManager, ApiController $api, LoggerInterface $logger): Response
    {
        $id_shoper = $product->getProductId();

        $form = $this->createForm(ProductType::class, $product);
        $form->handleRequest($request);
        $attribute = $entityManager->getRepository(Attributes::class)->findAll();

        if ($form->isSubmitted() && $form->isValid()) {
            $attribute = new ProductType($entityManager);
            // $attribute1 = array_flip($attribute->getAttributesChoices(2, 20));
            // $attribute2 = array_flip($attribute->getAttributesChoices(2, 24));
            // $attribute3 = array_flip($attribute->getAttributesChoices(1));

            $data_shoper = [
                'producer_id' => $form['producer_id']->getData(),
                'name' => $form['name']->getData(),
                'code' => $form['SKU']->getData(),
                'ean' => $form['EAN']->getData(),
                'translation' => [
                    'pl_PL' => [
                        'active' => $form['stock_active']->getData(),
                        'description' => $form['description']->getData(),
                    ],
                ],
                'stock' => [
                    'weight' => $form['stock_weight']->getData(),
                    'price_wholesale' => $form['price_wholesale']->getData(),
                    'price_suggested' => $form['price_suggested']->getData(),
                    'stock' => $form['stock_stock']->getData(),
                ],
                ];

                // // Przetwarzanie atrybutu 1
                // foreach ($form['attributes1']->getData() as $value) {
                //     $data_shoper['attributes'][[7][$value] = $attribute1[$value]];
                // }
    
                // // Przetwarzanie atrybutu 2
                // foreach ($form['attributes2']->getData() as $value) {
                //     $data_shoper['attributes'][[10][$value] = $attribute2[$value]];
                // }
    
                // // Przetwarzanie atrybutu 3
                // foreach ($form['attributes3']->getData() as $value) {
                //     $data_shoper['attributes'][[12][$value] = $attribute3[$value]];
                // }
            $data_b2b = [
                'type' => $form['product_type']->getData() == 0 ? 'simple' : 'variations',
                'name' => $form['name']->getData(),
                'status' => $form['stock_active']->getData() == true ? 'publish' : 'draft',
                'description' => $form['description']->getData(),
                'short_description' => '',
                'price' => $form['price_wholesale']->getData(),
                'regular_price' => (string)$form['price_wholesale']->getData(),
                'categories' => [
                    [
                        'id' => 2436,
                    ]
                ],
                'meta_data' => [
                    [
                        'key' => '_sku',
                        'value' => $form['SKU']->getData(),
                    ],
                    [
                        'key' => '_ean',
                        'value' => $form['EAN']->getData(),
                    ],
                    [
                        'key'=> '_suggested_price',
                        'value' => $form['price_suggested']->getData(),
                    ],
                ],
                // 'images' => [
                //     [
                //         'src' => $form['image']->getData(),
                //     ],
                // ],
            ];
            // $id_b2b = $this->findByEan($form['EAN']);
            $logger->info(json_encode($api->put_shoper($data_shoper, 9441)));
            $logger->info(json_encode($api->put_b2b($data_b2b, 94771)));

            $entityManager->flush();
            return $this->redirectToRoute('app_product_edit', ['product_id' => $id_shoper], Response::HTTP_SEE_OTHER);
        }

        $options = $product->getOptions(); 
        $variants = [];
        $stockVariants = [];

        foreach ($options as $item) {
            $productStockEntity = $entityManager->getRepository(ProductStock::class)->findOneBy(['stock_id' => $item]); 
            $id = $productStockEntity->getId();
            $stock_id = $productStockEntity->getStockId();
            $options = $productStockEntity->getOptions();
            if ($productStockEntity) {
                $optionEntity = $entityManager->getRepository(OptionValue::class)->findOneBy(['ovalue_id' => $productStockEntity->getOptions()]);
                if ($optionEntity) {
                    $translation = $optionEntity->getTranslation();

                    foreach ($translation as $data) {
                        $variants['id'] = $id;
                        $variants['stockId'] = $stock_id;
                        $variants['size'] = $data['value'];
                        $stockVariants[] = $variants; 
                    }
                }
            }
        }
        return $this->render('admin/product/edit.html.twig', [
            'product' => $product,
            'form' => $form,
            'id' => $id_shoper,
            'variants' => $variants,
            'stockVariants' => $stockVariants,
        ]);
    }

    #[Route('/{id}', name: 'app_product_delete', methods: ['POST'])]
    public function delete(Request $request, Product $product, EntityManagerInterface $entityManager, ApiController $deleteShoper): Response
    {
        if ($this->isCsrfTokenValid('delete'.$product->getId(), $request->request->get('_token'))) {
            $endpoint = 'products/';
            $product_id = $product->getProductId();
            $deleteShoper->delete_shoper($endpoint, $product_id);
            $entityManager->remove($product);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_product_index', [], Response::HTTP_SEE_OTHER);
    }
    public function updateProducts(KernelInterface $kernel): Response
    {
        $application = new Application($kernel);
        $application->setAutoExit(false);

        $input1 = new ArrayInput([
            'command' => 'app:download-product',
        ]);
        $input2 = new ArrayInput([
            'command' => 'app:download-product-stock',
        ]);
        $input3 = new ArrayInput([
            'command' => 'app:dwonload-images',
        ]);

        $output = new BufferedOutput();
        $application->run($input1, $output);
        $application->run($input2, $output);
        $application->run($input3, $output);

        $content = $output->fetch();

        return $this->redirectToRoute('app_product_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/search', name: 'app_product_search', methods: ['GET'])]
    public function search(Request $request): Response
    {
        return $this->render('admin/product/search.html.twig', ['query' => (string) $request->query->get('q', '')]);
    }

    private function uploadFile($uploadedFile) {
        if ($uploadedFile) {
            $destination = $this->getParameter('kernel.project_dir').'/public/uploads';
            dd($uploadedFile->move($destination));
            return 'Pliki zostały pomyślnie przesłane i zapisane.';
        }
        return 'Nie wybrano żadnych plików do przesłania.';
    }

    private function findByEan($ean) {
            // Ustawienia API
            $consumer_key = 'ck_df8c5ad8bbab1eed3c1be48fbadc3ef13210fde6'; // Twoje Consumer Key
            $consumer_secret = 'cs_ece970e7f3fd8f43b10351dec9a67352c4a9d6af'; // Twoje Consumer Secret
            $store_url = 'https://b2b.zielonysklep.pl'; // URL sklepu

            // Tworzenie URL zapytania
            $request_url = $store_url . '/wp-json/wc/v3/products/ean/' . $ean . '/?consumer_key=' . $consumer_key . '&consumer_secret=' . $consumer_secret;

            // Inicjalizacja cURL
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $request_url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

            // Wykonanie zapytania
            $response = curl_exec($ch);

            // Sprawdzenie, czy wystąpił błąd
            if(curl_errno($ch)){
                echo 'Curl error: ' . curl_error($ch);
            }

            // Zamknięcie cURL
            curl_close($ch);

            // Wyświetlenie wyniku
            if ($response) {
                $data = json_decode($response, true);
                return $data['id'];
            } else {
                echo "Brak odpowiedzi z API";
            }
        }            
}
