<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ZapisController extends AbstractController
{
    #[Route('/zapis', name: 'app_zapis')]
    public function index(): Response
    {
        return $this->render('zapis/index.html.twig', [
            'controller_name' => 'ZapisController',
        ]);
    }
}
