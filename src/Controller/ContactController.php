<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use App\Entity\Contact;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;



class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact") 
     */
    public function contact(Contact $contact=Null,Request $request, EntityManagerInterface $manager)
    {
        //crée form
        $contact = new Contact();
        $form = $this->createFormBuilder($contact)
            ->add('nom', TextType::class, array("label" => "Nom :"))
            ->add('prenom', TextType::class, array("label" => "Prénom :"))
            ->add('mail', TextType::class, array("label" => "E-mail:"))
            ->add('message', TextareaType::class, array("label" => "Message :"))->getForm();
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $manager->persist($contact);
            $manager->flush();
            return $this->redirectToRoute('contact');
        }

        return $this->render('contact/contact.html.twig', [
            'controller_name' => 'ContactController',
            'form' => $form->createView()
        ]);
    }
}