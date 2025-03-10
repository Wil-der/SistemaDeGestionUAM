<?php

namespace App\Form;

use App\Entity\Combustible;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CombustibleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('nombreEntidad')
        ->add('dieselExistencia')
        ->add('dieselCobertura')
        ->add('gasolinaA83Existencia')
        ->add('gasolinaA83Cobertura')
        ->add('gasolinaA90Existencia')
        ->add('gasolinaA90Cobertura')
        ->add('lubricanteGrasaExistencia')
        ->add('lubricanteGrasaCobertura')
        ->add('lubricanteAceiteExistencia')
        ->add('lubricanteAceiteCobertura')
        ->add('observaciones');
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Combustible::class,
        ]);
    }
}
