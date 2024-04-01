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

use App\Entity\CategoriesTree;
use App\Form\CategoriesTree2Type;
use App\Repository\CategoriesTreeRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/categories/tree')]
class CategoriesTreeController extends AbstractController
{
    #[Route('/', name: 'app_categories_tree_index', methods: ['GET'])]
    public function index(CategoriesTreeRepository $categoriesTreeRepository): Response
    {
        return $this->render('categories_tree/index.html.twig', [
            'categories_trees' => $categoriesTreeRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_categories_tree_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $categoriesTree = new CategoriesTree();
        $form = $this->createForm(CategoriesTree2Type::class, $categoriesTree);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($categoriesTree);
            $entityManager->flush();

            return $this->redirectToRoute('app_categories_tree_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('categories_tree/new.html.twig', [
            'categories_tree' => $categoriesTree,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_categories_tree_show', methods: ['GET'])]
    public function show(CategoriesTree $categoriesTree): Response
    {
        return $this->render('categories_tree/show.html.twig', [
            'categories_tree' => $categoriesTree,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_categories_tree_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, CategoriesTree $categoriesTree, EntityManagerInterface $entityManager): Response
    {       
        $categoriesTreeAll = $entityManager->getRepository(CategoriesTree::class)->findAll();
        $form = $this->createForm(CategoriesTree2Type::class, $categoriesTree, [
            'categories_all' => $categoriesTreeAll,
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_categories_tree_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('categories_tree/edit.html.twig', [
            'categories_tree' => $categoriesTree,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_categories_tree_delete', methods: ['POST'])]
    public function delete(Request $request, CategoriesTree $categoriesTree, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$categoriesTree->getId(), $request->request->get('_token'))) {
            $entityManager->remove($categoriesTree);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_categories_tree_index', [], Response::HTTP_SEE_OTHER);
    }
}
