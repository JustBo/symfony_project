<?php

namespace Admin\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
  /**
   * @Route("/admin", name="admin")
   */
    public function indexAction() {
        return $this->render('AdminAdminBundle:Default:index.html.twig');
    }
}
