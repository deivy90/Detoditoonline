<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ClienteType
 *
 * @author DeivyAlejandro - Milena Vanegas - Paola Valladares
 */

namespace Detoditoonline\ClienteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;


class ClienteType extends AbstractType{
    //put your code here
    
    public function buildForm(FormBuilderInterface $builder, array $options) 
    {
        $builder
                ->add('nombre')
                ->add('cedula')
        ;
    }
    
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array('data_class'=>'Detoditoonline\ClienteBundle\Entity\Cliente',));
    }
    
    public function getName() {
        return 'detoditoonline_ClienteBundle_Cliente';
    }
    
}

?>
