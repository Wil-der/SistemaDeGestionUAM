<?php

namespace App\Form;

use App\Entity\Centro;
use App\Entity\ProduccionHuevos;
use App\Entity\TipoEntidad;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProduccionHuevosType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('nombreEntidad', EntityType::class, [ // Cambia EntidadType a EntityType
            'class' => TipoEntidad::class,
            'choice_label' => 'nombreEntidad', // Asegúrate de que 'plan' es un campo de tu entidad Centro
            'placeholder' => 'Selecciona una Entidad', // Texto por defecto
            'required' => true,
        ])
            ->add('entidades', EntidadType::class)
            ->add('observaciones')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => ProduccionHuevos::class,
        ]);
    }
}
