<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use AppBundle\Entity\BlogPost;
//use Swift_Mailer;

class ArticleController extends Controller{
    /**
     * @Route("article/{id}", name="article")
     */
    public function showAction($id){
        $repository = $this->getDoctrine()->getRepository(BlogPost::class);
        $article = $repository->findOneBy(array('id' => $id));
        //$request = Request::createFromGlobals();
        //$request = $request->getPathInfo();
        //$request = $request->query->get('id');
        //$response = new Response();

        // $url = $this->generateUrl(
        //     'article',
        //     array('id' => '4'),
        //     UrlGeneratorInterface::ABSOLUTE_URL
        // );
        //$mailer = $this->get('mailer');
        //redirect to route with <name>
        //return $this->redirectToRoute('homepage');
        // if($id == 1){
        //   throw $this->createNotFoundException('The product does not exist');
        // }
        // $product = $this->getDoctrine()
        // ->getRepository(Product::class)
        // ->find($productId);
        //delete
        //$em->remove($product);
        // $em->flush();
        //update
        // $product->setName('New product name!');
        // $em->flush();
        //$product = $em->getRepository(Product::class)->find($productId);
        if(!$article){
          throw $this->createNotFoundException('This post does not exist!');
        }

        return $this->render('article/index.html.twig',[
          'article' => $article
        ]);
    }
}
