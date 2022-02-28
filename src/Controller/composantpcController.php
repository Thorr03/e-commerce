<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class composantpcController extends AbstractController

{
    
    public function composantpc()
    {
        return $this->render('informatique/composantpc/composantpc.html.twig');
    }
}