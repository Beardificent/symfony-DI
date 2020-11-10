<?php

namespace App\Controller;


use App\Services\Capitalize;
use App\Entity\Logger;
use App\Services\Master;
use App\Services\SpacesToDashes;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SquarepantsController extends AbstractController
{
    private string $message;
    private Master $master;

//Stuck on using the master.

    public function __construct(SpacesToDashes $transform)
    {
        if($_POST['spaces-to-dashes']){
            $this->master = New Master($transform);
        }

    }


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
