<?php

namespace App\Form;

use App\Entity\Centro;
use App\Entity\Entidad;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CentroType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('plan')
            ->add('existenciaDiaria')
            ->add('existenciaAcumulada')
            ->add('existenciaAlmacen')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Centro::class,
        ]);
    }
}
