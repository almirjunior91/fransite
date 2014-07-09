<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Franbella\Bundle\SiteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

/**
 * Description of ContatoType
 *
 * @author ajunior
 */
class ContatoType extends AbstractType {
    
    public function buildForm(FormBuilderInterface $builder, array $options ){
        $builder->add('assunto', null, 
                        array(
                            'label' => '*Assunto:'
                        ))
                ->add('nome', null, 
                        array(
                            'label' => '*Nome:'
                        ))
                ->add('email', null, 
                        array(
                            'label' => '*Email:'
                        ))
                ->add('telefone', null, 
                        array(
                            'label' => '*Telefone:'
                        ))
                ->add('cidade', null, 
                        array(
                            'label' => '*Cidade:'
                        ))
                ->add('uf', null, 
                        array(
                            'label' => '*UF:'
                        ))
                ->add('mensagem', 'textarea', 
                        array(
                            'label' => '*Mensagem:',
                            'attr' => array('rows'  => '6')
                        ))
                ;
    }
    
    public function getName() {
        return 'contato';
    }
    
}