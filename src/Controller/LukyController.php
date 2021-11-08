<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LukyController extends AbstractController
{
    /**
     * @Route("/luky", name="luky")
     */
    public function index(float $max): Response
    {
         $Random = random_float(0,$max);
        return $this->render('luky/index.html.twig', [
            'controller_name' => 'LukyController',
        ]);
    }

    /**
     * @Route("/number", name="number")
     */
    public function number():Response{

        $random = random_int(0,100);

        return $this->render('luky/number.html.twig',['number' => $random,
    ]);
    }
    
}

