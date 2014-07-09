<?php

namespace Franbella\Bundle\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class VideoType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titulo', null, 
                    array(
                        'label' => 'Título'
                    ))
            ->add('descricao', null, 
                    array(
                        'label' => 'Descrição'
                    ))
            ->add('link', null, 
                    array(
                        'label' => 'Link do Vídeo'
                    ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Franbella\Bundle\AdminBundle\Entity\Video'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'franbella_bundle_adminbundle_video';
    }
}
