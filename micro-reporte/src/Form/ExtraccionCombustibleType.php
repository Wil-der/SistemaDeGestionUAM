<?php

namespace App\Form;

use App\Entity\ExtraccionCombustible;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ExtraccionCombustibleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('tipoCombustible')
        ->add('lugarExtraccion')
        ->add('cantidad')
        ->add('destino')
        ->add('observaciones')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => ExtraccionCombustible::class,
        ]);
    }
}
