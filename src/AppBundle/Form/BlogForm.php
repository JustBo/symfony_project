<?php
  namespace AppBundle\Form;

  use Symfony\Component\Form\AbstractType;
  use Symfony\Component\Form\FormBuilderInterface;
  use Symfony\Component\Form\Extension\Core\Type\SubmitType;

  class BlogForm extends AbstractType{

    public function buildForm(FormBuilderInterface $builder, array $options){
        $builder
          ->add('title')
          ->add('content')
          ->add('active')
          ->add('save',SubmitType::class);
    }

  }
