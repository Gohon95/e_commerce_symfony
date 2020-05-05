<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CompteController extends AbstractController
{
    /**
     * @Route("/compte_index", name="compte_index")
     */
    public function index()
    {
        return $this->render('compte/index.html.twig', [
            'controller_name' => 'CompteController',
        ]);
    }

    /**
    * @Route("/compte_index", name="compte_index")
    */
    public function relattion(): Response
    {
        $paniers = $this->getUser()->getPaniers();
        dump($paniers);
        return $this->render('panier/index.html.twig', [
            'paniers' => $paniers,
        ]);
    }
}
