<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use \Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /*
    /**
     * @Route("/", name="main_home")        //avant c'était ca
     */
    #[Route("/", name:"main_home")]         //maintenant c'est ca
    public function home(){
        return $this->render("main/home.html.twig");
    }
    /*
    /**
     * @Route("/test", name="main_test")
     */
    #[Route("/test", name:"main_test")]         //tout pareil
    public function test(){

        $film1 = [
            'title' => '<b>Hitman le cobra</b>',
            'year' => 1980
        ];


        return $this->render("main/test.html.twig",[
            'film1' => $film1
        ]);
    }

    public function show(EntityManagerInterface $entityManager){}
}