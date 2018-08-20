<?php

namespace GSEB\PlatformBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use GSEB\PlatformBundle\Form\RackspaceType;
use GSEB\PlatformBundle\Form\AttributType;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

class ObjectType extends AbstractType
{
    
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $objtype = intval($options['idObjType']);
        $id_baie = intval($options['idBaie']);
        $attrObj = $options['attrObj'];
        $res = count($attrObj);
        $i = 0;
        $tabnom = array();
        $tabid = array();
        for ($i = 1 ; $i < $res ; $i++){
            $tabnom[$i] = $attrObj[$i]['name'];
            $tabid[$i] = $attrObj[$i]['id']; 
        }
        $builder
            ->add('objtypeId', HiddenType::class, array(
                'data' => $objtype,
            ))
            ->add('name',  TextType::class)
            ->add('rackspace',  RackspaceType::class, array(
                'idBaie' => $id_baie,
                'label' => 'Occupation dans la baie',
            ))
            ->add('attribut', CollectionType::class, array(
                'entry_type' => AttributType::class,
                'entry_options' => array(
                    'label' => false,
                    'idattrObj' => $tabid,
                    'nameattrObj'=>$tabnom,
                ),
            ));
            /* //
                $builder
                    ->add('attribut', AttributType::class,  array(
                        'nameattrObj' =>$attrObj[7]['name'],
                        'idattrObj' => $attrObj[7]['id'], 
                        'label' => "Attribut n°",
                ));
            //}*/
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setRequired(['idObjType']);
        $resolver->setRequired(['idBaie']);
        $resolver->setRequired(['attrObj']);
    
        $resolver->setDefaults(array(
             'data_class' => 'GSEB\PlatformBundle\Entity\Object'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'gseb_platformbundle_object';
    }
   

}
