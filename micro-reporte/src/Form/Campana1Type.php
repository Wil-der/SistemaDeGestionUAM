<?php

namespace App\Form;

use App\Entity\Campana1;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class Campana1Type extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('nombreEntidad')
        ->add('roturadasPlan')
        ->add('roturadasReal')
        ->add('sembradasPlan')
        ->add('sembradasReal')
        ->add('roturadasPapaArrozPlan')
        ->add('roturadasPapaArrozReal')
        ->add('sembradasPapaArrozPlan')
        ->add('sembradasPapaArrozReal')
        ->add('otrasProducciones')
        ->add('otrasProduccionesReal')
        ->add('observaciones');
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Campana1::class,
        ]);
    }
}
