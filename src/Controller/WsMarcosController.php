<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WsMarcosController extends AbstractController
{
    #[Route('/ws/marcos', name: 'app_ws_marcos')]
    public function index(): Response
    {
        return $this->render('ws_marcos/index.html.twig', [
            'controller_name' => 'WsMarcosController',
        ]);
    }
}
