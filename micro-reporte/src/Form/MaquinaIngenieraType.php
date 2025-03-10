<?php

namespace App\Form;

use App\Entity\MaquinaIngeniera;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MaquinaIngenieraType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('nombreEntidad')
        ->add('buldocerA')
        ->add('buldocerI')
        ->add('cargadorA')
        ->add('cargadorI')
        ->add('excavadorA')
        ->add('excavadorI')
        ->add('autoGruaA')
        ->add('autoGruaI')
        ->add('geA')
        ->add('geI')
        ->add('motoNiveladoraA')        
        ->add('motoNiveladoraI')
        ->add('observaciones')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => MaquinaIngeniera::class,
        ]);
    }
}
