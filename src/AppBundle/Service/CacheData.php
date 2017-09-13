<?php
  namespace AppBundle\Service;

  class CacheData{

    private $cacher;
    public function __construct( $cacher ){
      $this->cacher = $cacher;
    }
    public function cache( $data ){
      return strtoupper($data);
    }

  }
