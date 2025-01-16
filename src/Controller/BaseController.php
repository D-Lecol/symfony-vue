<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class BaseController extends AbstractController
{
    #[Route('/{path<.+>}', name: 'app')]
    public function index($path = ''): Response
    {
        return $this->render('base.html.twig');
    }
}
