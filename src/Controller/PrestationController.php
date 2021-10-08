<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Prestation;
use APP\Entity\reserver;
use Doctrine\ORM\EntityManagerInterface;

use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\Form\Extension\Core\Type\TextType;

use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

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

    
    /**
     * @Route("/prestation/{id}", name="reserver")
     */
    public function reserver(Request $request, $id)
    {
        $repo = $this->getDoctrine()->getRepository(Prestation::class);
        $prestations = $repo->find($id);
        
        $reserver = new reserver();
        $manager = $this->getDoctrine()->getManager();
        $form = $this->createFormBuilder($reserver)
                ->add('date')
                ->add('name')
                ->add('phone')
                ->add('mail')
                ->getForm();
                $form->handleRequest($request);



        if($form->isSubmitted() && $form->isValid()) {

            $reserver->setCreatedAt(new \DateTime());



           $manager->persist($reserver);

           $manager->flush();



           return $this->render('prestation/reserver.html.twig',[
            'formReserver' => $form->createView(),
            'prestations' => $prestations
            ]);
        }
           return $this->render('prestation/reserver.html.twig',[
            'formReserver' => $form->createView(),
            'prestations' => $prestations
        ]);
        return $this->render('prestation/reserver.html.twig', [
            'controller_name' => 'PrestationController',
            'prestations' => $prestations
        ]);
    }

    
}
