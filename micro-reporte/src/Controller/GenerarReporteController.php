<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Controller\others\ObtenerReporte;
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
use App\Entity\ProduccionHuevos;
use App\Entity\Reporte;
use App\Entity\Transportacion;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use App\Form\CustomType;
use App\Form\ReporteType;

final class GenerarReporteController extends AbstractController
{
    #[Route('/reporte-diario', name: 'app_reporte_diario')]
    public function index( ObtenerReporte $obtenerReporte): Response {
    //    $data = $obtenerReporte->ultimoReportePorFecha();

        return $this->render('generar_reporte/index.html.twig', [
            'reporte' => $$obtenerReporte->ultimoReportePorFecha()
        ]);
    }

    #[Route('/nuevo-reporte', name: 'app_nuevo_reporte')]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $empresa = new Reporte();
        $form = $this->createForm(ReporteType::class, $empresa);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($empresa);
            $entityManager->flush();

            return $this->redirectToRoute('app_reporte_diario', [], Response::HTTP_SEE_OTHER, 201);
        }

        return $this->render('generar_reporte/new.html.twig', [
            'empresa' => $empresa,
            'form' => $form,
        ]);
    }
}
