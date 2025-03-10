<?php

namespace App\Form;

use App\Entity\Transportacion;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TransportacionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('tipoTransporte')
        ->add('destinoCarga')
        ->add('cantidad')
        ->add('tipoMercancia')
        ->add('observaciones')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Transportacion::class,
        ]);
    }
}
