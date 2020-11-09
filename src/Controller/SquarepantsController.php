<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SquarepantsController extends AbstractController
{

    /**
     * @Route("/", name="squarepants")
     */
    public function index(): Response
    {
        return $this->render('squarepants/index.html.twig', [
            'name' => 'Spongebob',
        ]);
    }



}
