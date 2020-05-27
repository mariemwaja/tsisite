<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class UniversityController extends AbstractController
{
    /**
     * @Route("/university", name="university")
     */
    public function index()
    {
        return $this->render('university.html.twig', [
            'controller_name' => 'UniversityController',
        ]);
    }
}
