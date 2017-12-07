<?php

// src/menuBundle/Form/Type/RegistrationType.php
 
namespace menuBundle\Form\Type;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use menuBundle\Entity\User; 
class RegistrationFormType extends AbstractType
 
{
   public function buildForm(FormBuilderInterface $builder, array $options)
 
   {
       
       $builder->add('first_name');
       $builder->add('last_name');       
       $builder->add('roles', ChoiceType::class, array(
                'label' => 'Rol',                
                'required' => true,                  
                'choices' => array( 
                    'Administrador' => 'ROLE_ADMIN',
                    'Usuario' => 'ROLE_USER'),                  
                'multiple' => true
           ));
       
        #$builder->add('roles', EntityType::class, array(
         #       'class'=>'menuBundle:Grupo',
          #      'choice_label'=>'name',                  
           #     ));
       
   }
 
   public function getParent()
 
   {
       return 'FOS\UserBundle\Form\Type\RegistrationFormType';
   }
 
   public function getBlockPrefix()
 
   {
       return 'app_user_registration';
   }
 
   public function getName()
 
   {
       return $this->getBlockPrefix();
   }
 
}

