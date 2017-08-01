<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Blog;
//use AppBundle\Repository\BlogRepository;

class HomeController extends Controller{
    /**
     * @Route("/", name="homepage")
     */
    public function showAction(){
        $repository = $this->getDoctrine()->getRepository(Blog::class);
        $blogs = $repository->findAllOrderedById();
        // $blogs = $repository->findAll();
        return $this->render('home/index.html.twig',[
          'blogs' => $blogs
        ]);
    }
}
