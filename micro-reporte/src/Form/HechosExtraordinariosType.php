<?php

namespace App\Form;

use App\Entity\HechosExtraordinarios;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class HechosExtraordinariosType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
{
    $builder
        ->add('nombreEntidad', null, [
            'attr' => ['class' => 'input']
        ])
        ->add('acumuladosAnos', null, [
            'attr' => ['class' => 'input']
        ])
        ->add('hsgMayorMenor', null, [
            'attr' => ['class' => 'input']
        ])
        ->add('hgMayorMenor', null, [
            'attr' => ['class' => 'input']
        ])
        ->add('hurtoRoboViolencia', null, [
            'attr' => ['class' => 'input']
        ])
        ->add('hurtoRoboFuerza', null, [
            'attr' => ['class' => 'input']
        ])
        ->add('hurtoRoboOtros', null, [
            'attr' => ['class' => 'input']
        ])
        ->add('Arma', null, [
            'attr' => ['class' => 'input']
        ])
        ->add('municion', null, [
            'attr' => ['class' => 'input']
        ])
        ->add('accidenteTrabajo', null, [
            'attr' => ['class' => 'input']
        ])
        ->add('accidenteTransito', null, [
            'attr' => ['class' => 'input']
        ])
        ->add('muertos', null, [
            'attr' => ['class' => 'input']
        ])
        ->add('heridos', null, [
            'attr' => ['class' => 'input']
        ])
        ->add('observaciones', null, [
            'attr' => ['class' => 'input']
        ]);
}


    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => HechosExtraordinarios::class,
        ]);
    }
}
