<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/",name="main_home")
     */
    public function home()
    {
       $manale = ["prenom" => "Manale", "Nom" => "BOUTAYBI" , "age" => 23 , "adresse" => "110 BD Carnot"];
       return $this->render('main/home.html.twig' , ["Manale" => $manale]);
    }
    /**
     * @Route("/test",name="main_test")
     */
    public function test()
    {
        return $this->render('main/test.html.twig');
    }
}
