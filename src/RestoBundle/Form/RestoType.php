<?php

namespace RestoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RestoType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('idPlaceResto')->add('nomresto')->add('adresseresto')->add('description')->add('ouverture')->add('fermeture')->add('typeresto')->add('email')->add('mdpresto')->add('ribresto')->add('lngresto')->add('ltdresto');
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'RestoBundle\Entity\Resto'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'restobundle_resto';
    }


}
