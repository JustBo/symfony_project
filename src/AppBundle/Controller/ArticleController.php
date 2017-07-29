<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//use Symfony\Component\HttpFoundation\Request;
//use Symfony\Component\HttpFoundation\Response;

class ArticleController extends Controller{
    /**
     * @Route("article/{id}", name="article")
     */
    public function showAction($id){
        return $this->render('article/index.html.twig',[
          'id' => $id,
        ]);
    }
}
