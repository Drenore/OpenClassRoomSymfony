<?php 

namespace App\Controller;



use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class Test{

    /**
     * @Route("/" , name="index")
     */
    public function index()
    {
        
        return new Response("Bienvenu sur la page d'accueil");
        
       

    }

    /**
     * @Route("/article/{articlesId?0}", name="show_article")
     */
    public function show_article($articlesId){

        return new Response("Vous êtes sur la page de l'article numéro $articlesId");

    }

}