<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\BlogPost;
use AppBundle\Repository\BlogPostRepository;

class BlogController extends Controller{
    /**
     * @Route("/blog", name="blog")
     */
    public function showAction(){
        $repository = $this->getDoctrine()->getRepository(BlogPost::class);
        $blogs = $repository->findAll();
        // $blogs = $repository->findAll();
        return $this->render('blog/index.html.twig',[
          'blogs' => $blogs
        ]);
    }

    public function showFooterPostsAction(){
        $limit = 3;
        $cache = $this->get('doctrine_cache.providers.my_markdown_cache');
        $repository = $this->getDoctrine()->getRepository(BlogPost::class);
        $recentKey = md5( 'recent' );
        $popularKey = md5( 'popular' );

        if( $cache->contains( $recentKey ) ){
          $recentBlogs = $cache->fetch( $recentKey );
        }else{
          $recentBlogs = $repository->findRecentPosts($limit);
          $cache->save( $recentKey, $recentBlogs );
        }
        if( $cache->contains( $popularKey ) ){
          $popularBlogs = $cache->fetch( $popularKey );
        }else{
          $popularBlogs = $repository->findPopularPosts($limit);
          $cache->save( $recentKey, $popularBlogs );
        }

        //var_dump($popularBlogs[0]->getId());
        // $blogs = $repository->findAll();
        return $this->render('footer/blogs.html.twig',[
          'recentBlogs' => $recentBlogs,
          'popularBlogs' => $popularBlogs
        ]);
    }

}
