<?php

namespace App\Form;

use App\Entity\Mortalidad;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MortalidadType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nombreEntidad')
            ->add('vacunoHoy')
            ->add('vacunoAcumulado')
            ->add('equinoHoy')
            ->add('equinoAcumulado')
            ->add('ovinohoy')
            ->add('ovinoAcumulado')
            ->add('porcinoHoy')
            ->add('porcinoAcumulado')
            ->add('conejoHoy')
            ->add('conejoAcumulado')
            ->add('observaciones')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Mortalidad::class,
        ]);
    }
}
