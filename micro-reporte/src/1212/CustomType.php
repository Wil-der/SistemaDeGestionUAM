<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CustomType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nombreEntidad')
            ->add('fecha')
            //hechos extraordinarios
            ->add('hechos_extraordinarios_acumuladosAños')
            ->add('hechos_extraordinarios_hsgMayorMenor')
            ->add('hechos_extraordinarios_hgMayorMenor')
            ->add('hechos_extraordinarios_hurtoRoboViolencia')
            ->add('hechos_extraordinarios_hurtoRoboFuerza')
            ->add('hechos_extraordinarios_hurtoRoboOtros')
            ->add('hechos_extraordinarios_Arma')
            ->add('hechos_extraordinarios_municion')
            ->add('hechos_extraordinarios_accidenteTrabajo')
            ->add('hechos_extraordinarios_accidenteTransito')
            ->add('hechos_extraordinarios_muertos')
            ->add('hechos_extraordinarios_heridos')
            ->add('hechos_extraordinarios_observaciones')
            //produccion huevos
            ->add('produccion_huevos_nombreCentro')
            ->add('prod_huevo_plan')
            ->add('prod_huevo_existenciaDiaria')
            ->add('prod_huevo_existenciaAcumulada')
            ->add('prod_huevo_existenciaAlmacen')
            ->add('prod_huevo_observaciones')
            //piensos
            ->add('pienso_avicolaPlan')
            ->add('pienso_avicolaReal')
            ->add('pienso_avicolaCovertura')
            ->add('pienso_porcinoPlan')
            ->add('pienso_pienoLiquidoPlan')
            ->add('pienso_pienoLiquidoAcumuladoDia')
            ->add('pienso_pienoLiquidoAcumuladoReal')
            ->add('pienso_extraccionMateriaPrimaDia')
            ->add('pienso_extraccionMateriaPrimaAcumulada')
            ->add('pienso_observaciones')

            //campana1
            ->add('campana1_roturadasPlan')
            ->add('campana1_roturadasReal')
            ->add('campana1_sembradasPlan')
            ->add('campana1_sembradasReal')
            ->add('campana1_roturadasPapaArrozPlan')
            ->add('campana1_roturadasPapaArrozReal')
            ->add('campana1_sembradasPapaArrozPlan')
            ->add('campana1_sembradasPapaArrozReal')
            ->add('campana1_otrasProduccionesPlan')
            ->add('campana1_otrasProduccionesReal')
            ->add('campana1_observaciones')

            //campana2
            ->add('campana2_recolectadasPlan')
            ->add('campana2_recolectadasReal')
            ->add('campana2_sembradasPlan')
            ->add('campana2_sembradasReal')
            ->add('campana2_roturadasPapaArrozPlan')
            ->add('campana2_roturadasPapaArrozReal')
            ->add('campana2_sembradasPapaArrozPlan')
            ->add('campana2_sembradasPapaArrozReal')
            ->add('campana2_otrasProduccionesPlan')
            ->add('campana2_otrasProduccionesReal')
            ->add('campana2_observaciones')

            //peces
            ->add('peces_nombreCentro')
            ->add('peces_plan')
            ->add('peces_existenciaDiariaReal')
            ->add('peces_existenciaDiariaAcumulada')
            ->add('peces_observaciones')

            //combustible
            ->add('combustible_dieselExistencia')
            ->add('combustible_dieselCobertura')
            ->add('combustible_gasolinaA83Existencia')
            ->add('combustible_gasolinaA83Cobertura')
            ->add('combustible_gasolinaA90Existencia')
            ->add('combustible_gasolinaA90Cobertura')
            ->add('combustible_lubricanteGrasaExistencia')
            ->add('combustible_lubricanteGrasaCobertura')
            ->add('combustible_lubricanteAceiteExistencia')
            ->add('combustible_lubricanteAceiteCobertura')
            ->add('combustible_observaciones')

            //nacimientos
            ->add('nacimientos_vacunoHoy')
            ->add('nacimientos_vacunoAcumulado')
            ->add('nacimientos_ovinohoy')
            ->add('nacimientos_ovinoAcumulado')
            ->add('nacimientos_porcinoHoy')
            ->add('nacimientos_porcinoAcumulado')
            ->add('nacimientos_equinoHoy')
            ->add('nacimientos_equinoAcumulado')
            ->add('nacimientos_totalhoy')
            ->add('nacimientos_totalAcumulado')
            ->add('nacimientos_observaciones')

            //mortalidad
            ->add('mortalidad_conejoHoy')
            ->add('mortalidad_conejoAcumulado')
            ->add('mortalidad_vacunoHoy')
            ->add('mortalidad_vacunoAcumulado')
            ->add('mortalidad_ovinoHoy')
            ->add('mortalidad_ovinoAcumulado')
            ->add('mortalidad_porcinoHoy')
            ->add('mortalidad_porcinoAcumulado')
            ->add('mortalidad_equinoHoy')
            ->add('mortalidad_equinoAcumulado')
            ->add('mortalidad_totalhoy')
            ->add('mortalidad_totalAcumulado')
            ->add('mortalidad_observaciones')

            //maquina ingeniera
            ->add('maquina_ingeniera_buldocerA')
            ->add('maquina_ingeniera_buldocerI')
            ->add('maquina_ingeniera_cargadorA')
            ->add('maquina_ingeniera_cargadorI')
            ->add('maquina_ingeniera_excavadoraA')
            ->add('maquina_ingeniera_excavadoraI')
            ->add('maquina_ingeniera_autoGruaA')
            ->add('maquina_ingeniera_autoGruaI')
            ->add('maquina_ingeniera_geA')
            ->add('maquina_ingeniera_geI')
            ->add('maquina_ingeniera_motoniveladoraA')
            ->add('maquina_ingeniera_motoniveladoraI')
            ->add('maquina_ingeniera_mi_totalA')
            ->add('maquina_ingeniera_mi_totalI')
            ->add('maquina_ingeniera_observaciones')

            //equipo riego
            ->add('equipo_riego_enrrolladorA')
            ->add('equipo_riego_enrrolladorI')
            ->add('equipo_riego_molinoVientoA')
            ->add('equipo_riego_molinoVientoI')
            ->add('equipo_riego_riegoElectricoA')
            ->add('equipo_riego_riegoElectricoI')
            ->add('equipo_riego_equipoAbastoA')
            ->add('equipo_riego_equipoAbastoI')
            ->add('equipo_riego_er_totalA')
            ->add('equipo_riego_er_totalI')
            ->add('equipo_riego_observaciones')

            //contenedores
            ->add('contenedores_puerto')
            ->add('contenedores_cantidad')
            ->add('contenedores_cantidadExtraida')
            ->add('contenedores_tipoMercancia')
            ->add('contenedores_observaciones')

            //extraccion combustible
            ->add('extraccion_combustible_tipoCombustible')
            ->add('extraccion_combustible_lugarExtraccion')
            ->add('extraccion_combustible_cantidadExtraida')
            ->add('extraccion_combustible_destino')
            ->add('extraccion_combustible_observaciones')

            //transportacion
            ->add('transportacion_tipoTransporte')
            ->add('transportacion_destinoCarga')
            ->add('transportacion_transp_cantidad')
            ->add('transportacion_tipoMercancia')
            ->add('transportacion_observaciones')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => CustomType::class,
        ]);
    }
}