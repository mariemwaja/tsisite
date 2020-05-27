<?php

namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\Post;




class PostController extends AbstractController
{
    /**
     * @Route("/post", name="post")
     * @param PostRepository $PostRepository
     * @return Response 
     */
    public function index(\App\Repository\PostRepository $postreposatory)
    
    {
        $posts = $postreposatory->findAll();
        dump($posts);
        return $this->render('post/index.html.twig', [
            'posts' => $posts 
        ]);
    }
    
}
