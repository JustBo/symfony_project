<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\BlogPost;
//use AppBundle\Repository\BlogRepository;

class ContactController extends Controller{
    /**
     * @Route("/contact", name="contact")
     */
    public function showAction(){
        // $repository = $this->getDoctrine()->getRepository(BlogPost::class);
        // $blogs = $repository->findAll();
        // $blogs = $repository->findAll();
        return $this->render('contact/index.html.twig');
    }
}
