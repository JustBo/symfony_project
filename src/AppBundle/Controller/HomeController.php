<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Blog;

class HomeController extends Controller{
    /**
     * @Route("/", name="homepage")
     */
    public function showAction(){
        $blogs = $this->getDoctrine()->getRepository(Blog::class)->findAll();
        return $this->render('home/index.html.twig',[
          'blogs' => $blogs
        ]);
    }
}
