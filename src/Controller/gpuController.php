<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\Product;
use Doctrine\Persistence\ManagerRegistry;
use App\Repository\ProductRepository;

class gpuController extends AbstractController

{
    
    public function gpu()
    {
        return $this->render('informatique/composantpc/gpu.html.twig');
    }

    /**
    * @Route("/informatique/composantpc/gpu/products", name="product_gpu")
    */
    public function index(ProductRepository $productRepository): Response
    {
        return $this->render('informatique/composantpc/gpu.html.twig', [
        	'products' => $productRepository->findAll(),
        ]);
    }
    
}

