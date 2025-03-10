<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use App\Entity\Campana1;
use App\Entity\Campana2;
use App\Entity\Peces;
use App\Entity\Combustible;
use App\Entity\Nacimientos;
use App\Entity\Mortalidad;
use App\Entity\MaquinaIngeniera;
use App\Entity\EquipoRiego;
use App\Entity\Contenedores;
use App\Entity\ExtraccionCombustible;
use App\Entity\Transportacion;

class PrincipalType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder->add('campana1', Campana1Type::class);
        $builder->add('campana2', Campana2Type::class);
        $builder->add('peces', PecesType::class);
        $builder->add('combustible', CombustibleType::class);
        $builder->add('nacimientos', NacimientosType::class);
        $builder->add('mortalidad', MortalidadType::class);
        $builder->add('maquina_ingeniera', MaquinaIngenieraType::class);
        $builder->add('equipo_riego', EquipoRiegoType::class);
        $builder->add('contenedores', ContenedoresType::class);
        $builder->add('extraccion_combustible', ExtraccionCombustibleType::class);
        $builder->add('transportacion', TransportacionType::class);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Campana1::class,
        ]);
    }
}   