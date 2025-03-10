<?php

namespace App\Form;

use App\Entity\Nacimientos;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class NacimientosType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('nombreEntidad')
        ->add('vacunoHoy')
        ->add('vacunoAcumulado')
        ->add('ovinohoy')
        ->add('ovinoAcumulado')
        ->add('porcinoHoy')
        ->add('porcinoAcumulado')
        ->add('equinoHoy')
        ->add('equinoAcumulado')
        ->add('observaciones')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Nacimientos::class,
        ]);
    }
}
