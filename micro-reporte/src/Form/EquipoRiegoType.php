<?php

namespace App\Form;

use App\Entity\EquipoRiego;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EquipoRiegoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('nombreEntidad')
        ->add('enrrolladorA')
        ->add('enrrolladorI')
        ->add('molinoVientoA')
        ->add('molinoVientoI')
        ->add('riegoElectricoA')
        ->add('riegoElectricoI')
        ->add('equipoAbastoA')
        ->add('equipoAbastoI')
        ->add('observaciones')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => EquipoRiego::class,
        ]);
    }
}
