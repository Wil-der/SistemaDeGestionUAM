<?php
namespace App\Controller\others;

use App\Repository\Campana1Repository;
use App\Repository\Campana2Repository;
use App\Repository\CombustibleRepository;
use App\Repository\ContenedoresRepository;
use App\Repository\EquipoRiegoRepository;
use App\Repository\ExtraccionCombustibleRepository;
use App\Repository\HechosExtraordinariosRepository;
use App\Repository\MaquinaIngenieraRepository;
use App\Repository\MortalidadRepository;
use App\Repository\NacimientosRepository;
use App\Repository\PecesRepository;
use App\Repository\ProduccionHuevosRepository;
use App\Repository\TransportacionRepository;
use Symfony\Component\HttpFoundation\JsonResponse;

class ObtenerReporte
{
    private Campana1Repository $campana1Repository;
    private Campana2Repository $campana2Repository;
    private CombustibleRepository $combustibleRepository;
    private ContenedoresRepository $contenedoresRepository;
    private EquipoRiegoRepository $equipoRiegoRepository;
    private ExtraccionCombustibleRepository $extraerCombustibleRepository;
    private ContenedoresRepository $extraerContenedoresRepository;
    private HechosExtraordinariosRepository $hechosExtraordinariosRepository;
    private MaquinaIngenieraRepository $maquinaIngenieraRepository;
    private MortalidadRepository $mortalidadRepository;
    private NacimientosRepository $nacimientosRepository;
    private PecesRepository $pecesRepository;
    private ProduccionHuevosRepository $produccionHuevosRepository;
    private TransportacionRepository $transportacionRepository;

    public function __construct(
        Campana1Repository $campana1Repository,
        Campana2Repository $campana2Repository,
        CombustibleRepository $combustibleRepository,
        ContenedoresRepository $contenedoresRepository,
        EquipoRiegoRepository $equipoRiegoRepository,
        ExtraccionCombustibleRepository $extraerCombustibleRepository,
        ContenedoresRepository $extraerContenedoresRepository,
        HechosExtraordinariosRepository $hechosExtraordinariosRepository,
        MaquinaIngenieraRepository $maquinaIngenieraRepository,
        MortalidadRepository $mortalidadRepository,
        NacimientosRepository $nacimientosRepository,
        PecesRepository $pecesRepository,
        ProduccionHuevosRepository $produccionHuevosRepository,
        TransportacionRepository $transportacionRepository
    ) {
        $this->campana1Repository = $campana1Repository;
        $this->campana2Repository = $campana2Repository;
        $this->combustibleRepository = $combustibleRepository;
        $this->contenedoresRepository = $contenedoresRepository;
        $this->equipoRiegoRepository = $equipoRiegoRepository;
        $this->extraerCombustibleRepository = $extraerCombustibleRepository;
        $this->extraerContenedoresRepository = $extraerContenedoresRepository;
        $this->hechosExtraordinariosRepository = $hechosExtraordinariosRepository;
        $this->maquinaIngenieraRepository = $maquinaIngenieraRepository;
        $this->mortalidadRepository = $mortalidadRepository;
        $this->nacimientosRepository = $nacimientosRepository;
        $this->pecesRepository = $pecesRepository;
        $this->produccionHuevosRepository = $produccionHuevosRepository;
        $this->transportacionRepository = $transportacionRepository;
    }

    public function ultimoReportePorFecha(): JsonResponse
    {
        $data = [
            'campana1' => $this->campana1Repository->findLatest(),
            'campana2' => $this->campana2Repository->findLatest(),
            'combustible' => $this->combustibleRepository->findLatest(),
            'contenedores' => $this->contenedoresRepository->findLatest(),
            'equipoRiego' => $this->equipoRiegoRepository->findLatest(),
            'extraccionCombustible' => $this->extraerCombustibleRepository->findLatest(),
            'extraccionContenedores' => $this->extraerContenedoresRepository->findLatest(),
            'hechosExtraordinarios' => $this->hechosExtraordinariosRepository->findLatest(),
            'maquinaIngeniera' => $this->maquinaIngenieraRepository->findLatest(),
            'mortalidad' => $this->mortalidadRepository->findLatest(),
            'nacimientos' => $this->nacimientosRepository->findLatest(),
            'peces' => $this->pecesRepository->findLatest(),
            'produccionHuevos' => $this->produccionHuevosRepository->findLatest(),
            'transportacion' => $this->transportacionRepository->findLatest(),
        ];

        return new JsonResponse($data);
    }
}
