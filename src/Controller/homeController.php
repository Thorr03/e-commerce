<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class homeController extends AbstractController

{
    
    public function home()
    {
        return $this->render('home.html.twig');
    }
}