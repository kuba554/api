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

use App\Entity\ProductStock;
use App\Form\ProductStockType;
use App\Repository\ProductStockRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Controller\ApiController;
use Psr\Log\LoggerInterface;

#[Route('/product/stock')]
class ProductStockController extends AbstractController
{
    #[Route('/', name: 'app_product_stock_index', methods: ['GET'])]
    public function index(ProductStockRepository $productStockRepository): Response
    {
        return $this->render('product_stock/index.html.twig', [
            'product_stocks' => $productStockRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_product_stock_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $productStock = new ProductStock();
        $form = $this->createForm(ProductStockType::class, $productStock);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($productStock);
            $entityManager->flush();

            return $this->redirectToRoute('app_product_stock_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('product_stock/new.html.twig', [
            'product_stock' => $productStock,
            'form' => $form,
        ]);
    }

    #[Route('/{stock_id}', name: 'app_product_stock_show', methods: ['GET'])]
    public function show(ProductStock $productStock): Response
    {
        return $this->render('product_stock/show.html.twig', [
            'product_stock' => $productStock,
        ]);
    }

    #[Route('/{stock_id}/edit', name: 'app_product_stock_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, ProductStock $productStock, EntityManagerInterface $entityManager, ApiController $api, LoggerInterface $logger): Response
    {
        $id = $productStock->getStockId();
        $form = $this->createForm(ProductStockType::class, $productStock);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $endpoint = 'product-stocks/';
            $data_shoper = [
                'price' => $form['price']->getData(),
                'price_type' => $form['price_type']->getData(),
                'active' => $form['active']->getData(),
                'default' => $form['default_stock']->getData(),
                'stock' => $form['stock']->getData(),
                'warehouses' => $form['warehouses']->getData(),
                'warn_level'=> $form['warn_level']->getData(),
                'sold'=> $form['sold']->getData(),
                'code'=> $form['code']->getData(),
                'ean'=> $form['ean']->getData(),
                'weight'=> $form['weight_type']->getData(),
                'weight_type'=> $form['weight_type']->getData(),
                'availiability_id'=> $form['availiability_id']->getData(),
                'delivery_id'=> $form['delivery_id']->getData(),
                'gfx_id' => $form['gfx_id']->getData(),
                'options' => $form['options']->getData(),
                'package'=> $form['package']->getData(),
                'price_wholesale'=> $form['price_wholesale']->getData(),
                'price_special'=> $form['price_special']->getData(),
                'price_type_wholesale'=> $form['price_type_wholesale']->getData(),
                'price_type_special'=> $form['price_type_special']->getData(),
                'price_buying'=> $form['price_buying']->getData(),
                'calculation_unit_id' => $form['calculation_unit_id']->getData(),
                'calculation_unit_ratio'=> $form['calculation_unit_ratio']->getData(),
                'historical_lowest_price' => $form['historical_lowest_price']->getData(),
                'wholesale_historical_lowest_price' => $form['wholesale_historical_lowest_price']->getData(),
                'special_historical_lowest_price' => $form['special_historical_lowest_price']->getData(),  
            ];
            $logger->info(json_encode($api->put_shoper($endpoint, $id, $data_shoper)));

            $entityManager->flush(); 
            return $this->redirectToRoute('app_product_stock_edit', ['stock_id' => $id], Response::HTTP_SEE_OTHER);
        }

        return $this->render('product_stock/edit.html.twig', [
            'product_stock' => $productStock,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_product_stock_delete', methods: ['POST'])]
    public function delete(Request $request, ProductStock $productStock, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$productStock->getId(), $request->request->get('_token'))) {
            $entityManager->remove($productStock);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_product_stock_index', [], Response::HTTP_SEE_OTHER);
    }
}
