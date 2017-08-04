<?php
  namespace AppBundle\Admin;

  use Sonata\AdminBundle\Admin\AbstractAdmin;
  use Sonata\AdminBundle\Datagrid\ListMapper;
  use Sonata\AdminBundle\Form\FormMapper;

  class BlogPostAdmin extends AbstractAdmin {

    protected function configureFormFields(FormMapper $formMapper) {
        $formMapper
          ->with('Content', array('class' => 'col-md-9'))
            ->add('title', 'text')
            ->add('body','textarea')
          ->end()
          ->with('Meta data', array('class' => 'col-md-3'))
            ->add('category', 'sonata_type_model', array(
              'class' => 'AppBundle\Entity\Category',
              'property' => 'name'
            ))
          ->end()
        ;
    }

    protected function configureListFields(ListMapper $listMapper) {
        //$listMapper->addIdentifier('name');
    }

    public function toString($object) {
        return $object instanceof BlogPost
            ? $object->getTitle()
            : 'Blog Post'; // shown in the breadcrumb on the create view
    }

 }
