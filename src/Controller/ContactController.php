<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use App\Entity\Contact;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;


class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact") 
     */
    public function contact(): Response
    {
        //crée form
        $contact = new Contact();
        $form = $this->createFormBuilder($contact)
            ->add('nom', TextType::class, array("label" => "Nom :"))
            ->add('prenom', TextType::class, array("label" => "Prénom :"))
            ->add('mail', TextType::class, array("label" => "E-mail:"))
            ->add('message', TextareaType::class, array("label" => "Message :"))->getForm();
        return $this->render('contact/contact.html.twig', [
            'controller_name' => 'ContactController',
            'form' => $form->createView()
        ]);
    }
}
