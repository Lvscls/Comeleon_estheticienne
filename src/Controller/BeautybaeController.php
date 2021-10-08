<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BeautybaeController extends AbstractController
{
        /**
     * @Route("/accueil", name="accueil")
     */
    public function accueil(): Response
    {
        return $this->render('beautybae/accueil.html.twig', [
            'controller_name' => 'BeautybaeController',
        ]);
    }
    /**
     * @Route("/beautybae", name="beautybae")
     */
    public function index(): Response
    {
        return $this->render('beautybae/index.html.twig', [
            'controller_name' => 'BeautybaeController',
        ]);
    }


}
