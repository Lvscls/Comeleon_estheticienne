<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Prestation;

class PrestationController extends AbstractController
{
    /**
     * @Route("/prestation", name="prestation")
     */
    public function index(): Response
    {
        $repository = $this->getDoctrine()->getRepository(Prestation::class);
        $prestations = $repository->findAll();

        return $this->render('prestation/prestation.html.twig', [
            'controller_name' => 'PrestationController',
            'prestations' => $prestations
        ]);
    }
}
