<?php

namespace App\Form;

use App\Entity\Campana1;
use App\Entity\Campana2;
use App\Entity\Combustible;
use App\Entity\Contenedores;
use App\Entity\EquipoRiego;
use App\Entity\ExtraccionCombustible;
use App\Entity\HechosExtraordinarios;
use App\Entity\MaquinaIngeniera;
use App\Entity\Mortalidad;
use App\Entity\Nacimientos;
use App\Entity\Peces;
use App\Entity\Pienso;
use App\Entity\ProduccionHuevos;
use App\Entity\Reporte;
use App\Entity\Transportacion;
use Doctrine\DBAL\Types\DateType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType as TypeDateType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ReporteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('fecha')

            ->add('contenedores', ContenedoresType::class)

            ->add('campana1', Campana1Type::class)

            ->add('campana2', Campana2Type::class)

            ->add('combustible', CombustibleType::class)

            ->add('equipoRiego', EquipoRiegoType::class)

            ->add('extraccionCombustible', ExtraccionCombustibleType::class)

            ->add('hechosExtraordinarios', HechosExtraordinariosType::class)

            ->add('maquinaIngeniera', MaquinaIngenieraType::class)

            ->add('mortalidad', MortalidadType::class)

            ->add('nacimientos', NacimientosType::class)

            ->add('peces', PecesType::class)

            ->add('pienso', PiensoType::class)

            ->add('produccionHuevos', ProduccionHuevosType::class)

            ->add('transportacion', TransportacionType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reporte::class,
        ]);
    }
}
