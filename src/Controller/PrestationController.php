<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PrestationController extends AbstractController
{
    /**
     * @Route("/prestation", name="prestation")
     */
    public function index(): Response
    {
        $repository = $this->getDoctrine()->getRepository(Prestation::class);
        $prestation = $repository->findAll();
        
        return $this->render('prestation/index.html.twig', [
            'controller_name' => 'PrestationController',
            'prestation' => $prestation
        ]);
    }
}
