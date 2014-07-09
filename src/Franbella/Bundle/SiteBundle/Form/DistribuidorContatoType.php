<?php

namespace Franbella\Bundle\SiteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class DistribuidorContatoType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('cidade')
            ->add('comentario')
            ->add('negocio')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Franbella\Bundle\SiteBundle\Entity\DistribuidorContato'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'franbella_bundle_sitebundle_distribuidorcontato';
    }
}
