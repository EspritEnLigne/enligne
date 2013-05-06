<?php

namespace Esprit\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EspCursusType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('libelle', 'choice', array(
                    'choices' => array('Cursus scolaire et universitaire' => 'Cursus scolaire et universitaire'
                        , 'Cursus à ESPRIT' => 'Cursus à ESPRIT'
                        , 'Fonction à ESPRIT' => 'Fonction à ESPRIT'
                        ,'Unité pédagogique'=>'Unité pédagogique'
                        ,'Expérience avant ESPRIT'=>'Expérience avant ESPRIT'),
                    'required' => false,))
            ->add('type')
            ->add('datedebut', 'date', array(
                    'widget' => 'single_text',
                    'format' => 'dd/MM/yyyy',
                    'attr' => array('class' => 'date'),
                ))
            ->add('datefin', 'date', array(
                    'widget' => 'single_text',
                    'format' => 'dd/MM/yyyy',
                    'attr' => array('class' => 'date'),
                ))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Esprit\UserBundle\Entity\EspCursus'
        ));
    }

    public function getName()
    {
        return 'esprit_userbundle_espcursustype';
    }
}
