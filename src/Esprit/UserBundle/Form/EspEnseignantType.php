<?php

namespace Esprit\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EspEnseignantType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            
             ->add('civilite', 'choice', array(
                  'choices'   => array('Mr'   => 'Mr','Mme'   => 'Mme','Mlle'   => 'Mlle'),
                  'required'  => false,))
            ->add('idEns')
            ->add('cin')
            ->add('cnss')
            ->add('tel1')
            ->add('tel2')
            ->add('datenaissance', 'date', array(
                  'widget' => 'single_text',
                    'format' => 'dd/MM/yyyy',
                    'attr' => array('class' => 'date'),
))
            ->add('datentree', 'date', array(
                  'widget' => 'single_text',
                    'format' => 'dd/MM/yyyy',
                    'attr' => array('class' => 'date'),
))
            ->add('datesortie', 'date', array(
                  'widget' => 'single_text',
                    'format' => 'dd/MM/yyyy',
                    'attr' => array('class' => 'date'),
))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Esprit\UserBundle\Entity\EspEnseignant'
        ));
    }

    public function getName()
    {
        return 'esprit_userbundle_espenseignanttype';
    }
}
