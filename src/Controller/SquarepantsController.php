<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SquarepantsController extends AbstractController
{
    private string $message;


    /**
     * @Route("/", name="squarepants")
     */
    public function index(): Response
    {
        return $this->render('squarepants/index.html.twig', [
            'name' => 'Spongebob',
        ]);
    }

    /**
     * @Route("/master", name="master")
     */
    public function Master(): Response
    {
        if(!isset($_POST['input'])){
            $this->message = "";
            return $this->render('squarepants/master.html.twig');
        } else {
            $this->message = $_POST['input'];
            return $this->render('squarepants/master.html.twig', ['message' => $this->message]);
        }
    }

}
