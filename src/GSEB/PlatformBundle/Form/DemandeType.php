<?php

namespace GSEB\PlatformBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use GSEB\PlatformBundle\Form\ContactType;
use GSEB\PlatformBundle\Form\ObjectType;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;


class DemandeType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $recupaction = $options['action'];
        $objtype =$options['idObjType'];
        $id_baie =$options['idBaie'];
        

        if ($recupaction == 'add')
            $action = 1;
        if ($recupaction == 'edit')
            $action = 2;
        if ($recupaction == 'delete')
            $action = 3;
            
        $builder

            ->add('sujet',      TextType::class)
            ->add('comment',    TextareaType::class, ['required' => false])
            ->add('action', HiddenType::class, array(
                'data' => $action,
            ))
            ->add('contact',    ContactType::class)
            ->add('object',      ObjectType::class, array(
                'idObjType' => $objtype,
                'idBaie' => $id_baie,
            ))
            ->add('save',    SubmitType::class,array(
                'label'=> 'Envoyer la demande'
            ))            
        ;
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setRequired(['idObjType']);
        $resolver->setRequired(['idBaie']);
        $resolver->setDefaults(array(
            'data_class' => 'GSEB\PlatformBundle\Entity\Demande',
        ));
    }  
    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'gseb_platformbundle_demande';
    }


}
