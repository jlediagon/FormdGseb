<?php

namespace GSEB\PlatformBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class RackspaceType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $id_baie = intval($options['idBaie']);
        
        $builder
            ->add('unitNo', IntegerType::class)
            ->add('atom',   IntegerType::class)
            ->add('rackId', HiddenType::class, array(
                'data' => $id_baie,
            ))
            ;
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setRequired(['idBaie']);        
        $resolver->setDefaults(array(
            'data_class' => 'GSEB\PlatformBundle\Entity\Rackspace'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'gseb_platformbundle_rackspace';
    }


}
