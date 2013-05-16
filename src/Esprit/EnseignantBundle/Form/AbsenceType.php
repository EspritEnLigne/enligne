<?php

namespace Esprit\EnseignantBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AbsenceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('anneeDeb')
            ->add('dateSaisie')
            ->add('remarque')
            ->add('semestre')
            ->add('justifier')
            ->add('heureAbsence')
            ->add('matiere')
            ->add('enseignant')
            ->add('classe')
            ->add('etudiant')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Esprit\EnseignantBundle\Entity\Absence'
        ));
    }

    public function getName()
    {
        return 'esprit_enseignantbundle_absencetype';
    }
}
