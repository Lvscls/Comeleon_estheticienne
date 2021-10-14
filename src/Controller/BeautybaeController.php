<?php

namespace App\Controller;

use App\Entity\Avis;
use App\Repository\AvisRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
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
 /**
     * @Route("/contact", name="contact")
     */
    public function contact(): Response
    {
        return $this->render('beautybae/contact.html.twig', [
            'controller_name' => 'ContactController',
        ]);
    }

    /**
     * @Route("/avis", name="avis")
     */
    public function avis(AvisRepository $repo)
    {
        $avis = $repo->findAll();
        return $this->render('avis/avis.html.twig', [
            'controller_name' => 'BeautybaeController',
            'avis' => $avis
        ]);
    }
    
    /**
     * @Route("/avis/new", name="avis_create")
     */
    public function create(Request $request, EntityManagerInterface $manager ){

        $avis = new Avis();
        $form = $this->createFormBuilder($avis)
        ->add('title', TextType::class, array("label" => "Titre de l'avis  :"))
        ->add('nom', TextType::class, array("label" => "Nom :"))
        ->add('prenom', TextType::class, array("label" => "Prénom :"))
        ->add('text', TextareaType::class, array("label" => "Avis :"))->getForm();
    $form->handleRequest($request);

        
        if($form->isSubmitted() && $form->isValid())
        {
            $avis->setCreatedAt(new \DateTime());
            $manager->persist($avis);
            $manager->flush();
            return $this->redirectToRoute('avis');
        }
 
        return $this->render('beautybae/create.html.twig', [
            'formAvis' => $form->createView()

        ]);                   
    }


}
