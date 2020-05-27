<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function index()
    {
       // return new \Symfony\Component\HttpFoundation\Response('<p style="color:red;">HHHHH</p>');
 
//return $this->render('main/index.html.twig', [
 return $this->render('home.html.twig', [
            'message'=> 'wellcome to my page ',
            'controller_name' => 'MainController',
        ]);
        
    }
      /**
     * @Route("/auth", name="auth")
     */
    public function response2()
    {
       
 return $this->render('auth.html.twig');
        
    }
    /**
     * @Route("/bts", name="bts")
     */
    public function response4()
    {
       
 return $this->render('bts.html.twig');
        
    }
     /**
     * @Route("/tsi", name="tsi")
     */
    public function response5()
    {
       
 return $this->render('tsi.html.twig');
        
    }
    /**
     * @Route("/registration", name="registration")
     */
    public function response()
    {
       
 return $this->render('registration.html.twig');
        
    }
     /**
     * @Route("/image", name="image")
     */
    public function imageAction()
    {
        $en = $this->getDoctrine()->getManager();
    $Image = $en->getRepository('App:Image')->findAll();
    foreach($Image as $key=>$Value){
        $Value->setImage(base64_encode(stream_get_contents($Value->getImage())));
    }
    
        return $this->render('image.html.twig', array ('image'=>$Image) );
    }
    /**
     * @Route("/home", name="home")
     */
    public function logoAction()
    {
        $en = $this->getDoctrine()->getManager();
    $logo = $en->getRepository('App:Logo')->findAll();
    foreach($logo as $key=>$Value){
        $Value->setimg(base64_encode(stream_get_contents($Value->getimg())));
    }
    
        return $this->render('home.html.twig', array ('img'=>$logo) );
    }
        
    
    /**
     * @Route("/compte", name="compte")
     */
    public function compte()
    {
       
 return $this->render('compte.html.twig');
        
    }
    /**
     * @Route("/hello_page", name="hello_page")
     */
    public function cv()
    {
       
 return $this->render('hello_page.html.twig');
        
    }
    
}
