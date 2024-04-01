<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    #[Route('/test', name: 'test_route')]
    public function test(): Response
    {
        return new Response('To jest testowa odpowiedź z kontrolera!');
    }
}
