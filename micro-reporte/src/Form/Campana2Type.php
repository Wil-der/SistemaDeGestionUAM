<?php

namespace App\Form;

use App\Entity\Campana2;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class Campana2Type extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('recolectadasPlan')
        ->add('nombreEntidad')
        ->add('recolectadasReal')
        ->add('sembradasPlan')
        ->add('sembradasReal')
        ->add('roturadasPapaArrozPlan')
        ->add('roturadasPapaArrozReal')
        ->add('sembradasPapaArrozPlan')
        ->add('sembradasPapaArrozReal')
        ->add('otrasProduccionesPlan')
        ->add('otrasProduccionesReal')
        ->add('observaciones');
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Campana2::class,
        ]);
    }
}
