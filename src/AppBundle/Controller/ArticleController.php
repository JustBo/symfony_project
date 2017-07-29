<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
//use Swift_Mailer;

class ArticleController extends Controller{
    /**
     * @Route("article/{id}", name="article")
     */
    public function showAction($id){
        $request = Request::createFromGlobals();
        //$request = $request->getPathInfo();
        $request = $request->query->get('id');
        $response = new Response();

        $url = $this->generateUrl(
            'article',
            array('id' => '4'),
            UrlGeneratorInterface::ABSOLUTE_URL
        );
        $mailer = $this->get('mailer');
        //redirect to route with <name>
        //return $this->redirectToRoute('homepage');
        if($id == 1){
          throw $this->createNotFoundException('The product does not exist');
        }
        return $this->render('article/index.html.twig',[
          'id' => $id,
          'request' => $request,
          'response' => $response,
          'url'=> $url,
          'mail' => $mailer,
        ]);
    }
}
