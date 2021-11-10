<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     */
    public function index(): Response
    {
        return $this->render('contact/index.html.twig', [
            'controller_name' => 'ContactController',
        ]);
    }

    /**
     * @Route("/contact/{type}", name="contact_type")
     */

    public function types(string $type): Response
    {
        return $this->render('contact/index.html.twig',[
            'controller_name' => 'ContactController',
           'type' => $type
        ]);
    }

    /**
     * @Route("/contact/{type}", name="contact_request")
     */

    public function request(Request $request, string $type = ""): Response
    {
        $name = $request->query->get('name');
        return $this->render('contact/index.html.twig',[
            'controller_name' => 'ContactController',
            'type' => $type,
            'name' => $name
    ]);
    }
}