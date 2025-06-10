<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class PortfolioController extends AbstractController
{
    #[Route('/portfolio', name: 'app_portfolio')]
    public function index(): Response
    {
        return $this->render('portfolio/index.html.twig');
    }

    #[Route('/portfolio/projet/{id}', name: 'app_projet')]
    public function projet(int $id): Response
    {
        if ($id == 1){
            return $this->render('projets/rezisten.html.twig');
        } else if ($id == 2){
            return $this->render('projets/stages.html.twig');
        } else if ($id == 3){
            return $this->render('projets/attestation.html.twig');
        } else if ($id == 4){
            return $this->render('projets/collocations.html.twig');
        }
    }
}
