<?php

namespace My\WorkBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class WorkType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('workDate')
            ->add('contentWork')
            ->add('title')
            ->add('editorWork')
            ->add('rewiewerWork')
            ->add('idAreaofinterest')
            ->add('idKeywords')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'My\WorkBundle\Entity\Work'
        ));
    }

    public function getName()
    {
        return 'my_workbundle_worktype';
    }
}
