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
            ->add('libelle')
            ->add('type')
            ->add('datedebut')
            ->add('datefin')
            ->add('espens')
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
