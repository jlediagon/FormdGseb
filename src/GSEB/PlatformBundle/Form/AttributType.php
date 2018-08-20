<?php

namespace GSEB\PlatformBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;

class AttributType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $nameAttr = $options['nameattrObj'];
        $idAttr = $options['idattrObj'];
        $builder
            ->add('value',TextType::class,array(
                'label'=> $nameAttr
            ))
            ->add('attrId', HiddenType::class, array(
                'data' => $idAttr,
            ));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setRequired(['nameattrObj']); 
        $resolver->setRequired(['idattrObj']);        
        
        
        $resolver->setDefaults(array(
            'data_class' => 'GSEB\PlatformBundle\Entity\Attribut'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'gseb_platformbundle_attribut';
    }


}
