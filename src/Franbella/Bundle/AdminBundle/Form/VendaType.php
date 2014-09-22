<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Franbella\Bundle\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 * Description of VendaType
 *
 * @author ajunior
 */
class VendaType extends AbstractType {
    
       /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('estado', 'entity', 
                        array(
                            'label' => 'Estado: ',
                            'class' => 'BFOSBrasilBundle:Cidade',
                            'property' => 'uf',
                            //'choices' => $estados,
                            'label_attr' => array(
                                'class' => 'label_form'
                            )
                        ))
                ->add('bairro', 'choice', array(
                    'label' => 'Bairro: '
                ))
                ->add('tipoPDV', 'entity', array(
                    'class' => 'FranbellaAdminBundle:TipoPDV',
                    'empty_value' => 'Todos',
                    'property' => 'nome',
                    'label' => 'Procura Por?',
                    'label_attr' => array(
                        'class' => 'label_form'
                    )
                ))
        ;
        
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Franbella\Bundle\AdminBundle\Entity\PDV'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'franbella_bundle_adminbundle_venda';
    }

}
