<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * BlogRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class BlogRepository extends EntityRepository{

  public function findAllOrderedById(){
    return $this->getEntityManager()->createQuery('SELECT a FROM AppBundle:Blog a ORDER BY a.id')->getResult();
    //return $query->getResult();
  }
}
