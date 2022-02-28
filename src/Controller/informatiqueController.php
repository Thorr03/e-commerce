<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class informatiqueController extends AbstractController

{
    
    public function informatique()
    {
        return $this->render('informatique/informatique.html.twig');
    }
}