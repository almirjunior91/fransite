<?php

namespace Franbella\Bundle\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PDVType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('razaoSocial', null, array(
                'label' => 'Razão Social: '
            ))
            ->add('fantasia', null, array(
                'label' => 'Fantasia: '
            ))
            ->add('tipoPdv', null, array(
                'label' => 'Tipo PDV: '
            ))
            ->add('cidade', 'bfos_cidade_choice', 
                    array(
                            'label' => 'Estado: ',
                            'label_attr' => array(
                                'class' => 'label_form'
                            )
                        ))
            ->add('bairro', null, array(
                'label' => 'Bairro: '
            ))
            ->add('rua', null, array(
                'label' => 'Rua: '
            ))
            ->add('numero', null, array(
                'label' => 'Nº: '
            ))
            ->add('complemento', null, array(
                'label' => 'Complemento: '
            ))  
            ->add('cep', null, array(
                'label' => 'CEP: '
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
        return 'franbella_bundle_adminbundle_pdv';
    }
}
