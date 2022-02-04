<?php 

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class Test extends AbstractController{

    /**
     * @Route("/" , name="index")
     */
    public function index()
    {
        
        return new Response("Bienvenu sur la page d'accueil");
        
       

    }
    public function home(ComplexeObjet $complexeObjet){

        // $complexeObjet = doSomething();
    }

    /**
     * @Route("/article/{articlesId?0}", name="show_article")
     */
    public function show_article($articlesId){

        return new Response("Vous êtes sur la page de l'article numéro $articlesId");

    }

    /**
     * @Route("/hello-world/{name?World}", name="helloWorld")
     */

    public function helloWorld($name)
    {
        return new Response("Hello $name");
    }
    

}