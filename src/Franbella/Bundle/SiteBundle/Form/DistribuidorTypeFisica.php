<?php

namespace Franbella\Bundle\SiteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class DistribuidorTypeFisica extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('razao_social', null, array(
                'label' => 'Nome:'
            ))
            ->add('cpf_cnpj', null, array(
                'label' => 'CPF:'
            ))
            ->add('telefone_fixo', null, array(
                'label' => 'Telefone:'
            ))
            ->add('celular', null, array(
                'label' => 'Celular:'
            ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Franbella\Bundle\SiteBundle\Entity\Distribuidor'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'franbella_bundle_sitebundle_distribuidor';
    }
}
