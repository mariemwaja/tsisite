<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;



class DefaultController extends AbstractController {

    /*
     * @var string
    private $currentTheme;

    public function __construct(string $currentTheme){
        $this->currentTheme = $currentTheme;
    }
     */


    /**
     * @Route("/default", name="default")
     */
    public function index()
    {
        
        
        return $this->render('main/home.html.twig',array(
            'ismi' => 'meriem'
        ));
    }



    /**
     * @Route("contact", name="contact")
     */
    public function contact()
    {
        return $this->render($this->currentTheme.'/Spaces/Anonymous/contact.html.twig',array(
        ));
    }

}