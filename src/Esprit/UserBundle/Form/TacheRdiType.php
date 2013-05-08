<?php

namespace Esprit\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TacheRdiType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre')
            ->add('avancement','choice', array(
                    'choices' => array( '1' => 1, '2' => 2, '3' => 3,'4'=>4),
                    'required' => false,))
            ->add('projet')    
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Esprit\UserBundle\Entity\TacheRdi'
        ));
    }

    public function getName()
    {
        return 'esprit_userbundle_tacherditype';
    }
}
