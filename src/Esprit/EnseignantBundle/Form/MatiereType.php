<?php

namespace Esprit\EnseignantBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class MatiereType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('libelle')
            ->add('module')
            ->add('classes')
            ->add('enseignants')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Esprit\EnseignantBundle\Entity\Matiere'
        ));
    }

    public function getName()
    {
        return 'esprit_enseignantbundle_matieretype';
    }
}
