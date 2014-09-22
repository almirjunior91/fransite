<?php

namespace Franbella\Bundle\SiteBundle\Form;

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
            ->add('razao_social', null, array(
                'label' => '*Razão Social: ',
//                "required"=>false,
                'error_bubbling' => true
            ))
            ->add('fantasia', null, array(
                'label' => '*Fantasia: ',
//                "required"=>false,;
                'error_bubbling' => true
            ))
            ->add('cpf_cnpj', null, array(
                'label' => '*CNPJ: ',
//                "required"=>false,
                'error_bubbling' => true
            ))
            ->add('inscricao_estadual', null, array(
                'label' => '*IE: ',
//                "required"=>false,
                'error_bubbling' => true
            ))
            ->add('telefone_fixo', null, array(
                'label' => '*Telefone: ',
//                "required"=>false,
                'error_bubbling' => true
            ))
            ->add('celular', null, array(
                'label' => '*Celular: ',
//                "required"=>false,
                'error_bubbling' => true
            ))
            ->add('ramal', null, array(
                'label' => 'Ramal:',
                "required"=>false,
                'error_bubbling' => true
            ))
            ->add('qtd_representantes', null, array(
                'label' => '*Qtd. Representantes: ',
                "required"=>false,
                'error_bubbling' => true
            ))
            ->add('faturamento_bruto', null, array(
                'label' => '*Faturamento Bruto: ',
//                "required"=>false,
                'error_bubbling' => true
            ))
            ->add('area_atuacao', 'entity', array(
                'label' => '*Área de Atuação: ',
                'class' => 'Franbella\Bundle\SiteBundle\Entity\TipoNegocio'
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
