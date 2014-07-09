<?php

namespace Franbella\Bundle\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class DistribuidorType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('razaoSocial')
            ->add('telefone')
            ->add('file', null, 
                    array(
                        'required' => false,
                        'label' => 'Logo'
                        )
                    )
            ->add('cidade')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Franbella\Bundle\AdminBundle\Entity\Distribuidor'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'franbella_bundle_adminbundle_distribuidor';
    }
}
