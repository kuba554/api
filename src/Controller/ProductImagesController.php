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

use App\Entity\ProductImages;
use App\Form\ProductImagesType;
use App\Repository\ProductImagesRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\HttpClient\HttpClient;

#[Route('/product/images')]
class ProductImagesController extends AbstractController
{
    private $params;

    public function __construct(ParameterBagInterface $params)
    {
        $this->params = $params;
    }

    #[Route('/', name: 'app_product_images_index', methods: ['GET'])]
    public function index(ProductImagesRepository $productImagesRepository): Response
    {
            return $this->render('product_images/index.html.twig', [
            'product_gallery' => $productImagesRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_product_images_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $productImage = new ProductImages();
        $form = $this->createForm(ProductImagesType::class, $productImage);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($productImage);
            $entityManager->flush();

            return $this->redirectToRoute('app_product_images_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('product_images/new.html.twig', [
            'product_image' => $productImage,
            'form' => $form,
        ]);
    }

    #[Route('/{id}/show', name: 'app_product_images_show', methods: ['GET'])]
    public function show(ProductImages $productImage): Response
    {
        return $this->render('product_images/show.html.twig', [
            'product_image' => $productImage,
        ]);
    }

    #[Route('/{product_id}/edit', name: 'app_product_images_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, ProductImages $productImage, EntityManagerInterface $entityManager, ProductImagesRepository $imagesReposytory): Response
    {  
        $productId = $productImage->getProductId();

        $newProductImage = new ProductImages();
        $productId = $productImage->getProductId();

        $productGallery = $imagesReposytory->findBy(['product_id' => $productId]);

        $form = $this->createForm(ProductImagesType::class, $productImage);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {   
            $uploadedFile = $form['name']->getData();
            $originalFilename = pathinfo($uploadedFile->getClientOriginalName(), PATHINFO_FILENAME);
            $newFilename = $originalFilename.'.'.$uploadedFile->guessExtension();
            $newProductImage->setProductId($productId);
            $newProductImage->setName($newFilename);
            $newProductImage->setTranslations(['pl_PL' => ['name' => $newFilename]]);
            $entityManager->persist($newProductImage);
            $entityManager->flush();

            $ch = curl_init();
            $token = $this->params->get('api_token');
            $apiUrl = $this->params->get('api_url');
            $endpoint = 'product-images';
            $full_endpoint = $apiUrl . $endpoint;

            $headers = array(
                'Authorization: Bearer ' . $token,
                'Content-Type: application/json'
            );

            $data = [
                    'product_id' => $productId,
                    'name' => $newFilename,
                    'contenet' => '',
                    'hidden' => false,
                    'url' => $apiUrl,
                    'translations' => [
                        'pl_PL' => [
                            'name' => $newFilename
                        ]
                    ]
                ];
            
            curl_setopt($ch, CURLOPT_URL, $full_endpoint);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
            curl_exec($ch);

            if(curl_error($ch)){
                echo 'Błąd curl: ' . curl_error($ch);
            }
            
            curl_close($ch);

            return $this->redirectToRoute('app_product_images_edit', ['product_id' => $productId], Response::HTTP_SEE_OTHER);
        }
        return $this->render('product_images/edit.html.twig', [
            'product_image' => $productImage,
            'form' => $form,
            'product_gallery' => $productGallery,
        ]);
    }

    #[Route('/{id}', name: 'app_product_images_delete', methods: ['POST'])]
    public function delete(Request $request, ProductImages $productImage, EntityManagerInterface $entityManager): Response
    {
        $productId = $productImage->getProductId();

        if ($this->isCsrfTokenValid('delete'.$productImage->getId(), $request->request->get('_token'))) {
            $entityManager->remove($productImage);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_product_images_edit', ['product_id' => $productId], Response::HTTP_SEE_OTHER);
    }
}
