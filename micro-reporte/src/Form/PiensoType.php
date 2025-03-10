<?php

namespace App\Form;

use App\Entity\Pienso;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PiensoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nombreEntidad')
            ->add('avicolaPlan')
            ->add('avicolaReal')
            ->add('avicolaCovertura')
            ->add('porcinoPlan')
            ->add('porcinoReal')
            ->add('porcinoCovertura')
            ->add('piensoLiquidoPlan')
            ->add('piensoLiquidoAcumuladoDia')
            ->add('piensoLiquidoReal')
            ->add('extraccionMateriaPrimaDia')
            ->add('extraccionMateriaPrimaAcumulada')
            ->add('observaciones')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Pienso::class,
        ]);
    }
}
