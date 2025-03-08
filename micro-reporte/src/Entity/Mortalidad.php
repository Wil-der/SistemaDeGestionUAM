<?php

namespace App\Entity;

use App\Repository\MortalidadRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MortalidadRepository::class)]
class Mortalidad
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $fecha = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $observaciones = null;

    #[ORM\Column(length: 255)]
    private ?string $nombreEntidad = null;

    #[ORM\Column(nullable: true)]
    private ?int $conejoHoy = null;

    #[ORM\Column(nullable: true)]
    private ?int $conejoAcumulado = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFecha(): ?\DateTimeInterface
    {
        return $this->fecha;
    }

    public function setFecha(\DateTimeInterface $fecha): static
    {
        $this->fecha = $fecha;

        return $this;
    }

    public function getObservaciones(): ?string
    {
        return $this->observaciones;
    }

    public function setObservaciones(?string $observaciones): static
    {
        $this->observaciones = $observaciones;

        return $this;
    }

    public function getNombreEntidad(): ?string
    {
        return $this->nombreEntidad;
    }

    public function setNombreEntidad(string $nombreEntidad): static
    {
        $this->nombreEntidad = $nombreEntidad;

        return $this;
    }

    public function getConejoHoy(): ?int
    {
        return $this->conejoHoy;
    }

    public function setConejoHoy(?int $conejoHoy): static
    {
        $this->conejoHoy = $conejoHoy;

        return $this;
    }

    public function getConejoAcumulado(): ?int
    {
        return $this->conejoAcumulado;
    }

    public function setConejoAcumulado(?int $conejoAcumulado): static
    {
        $this->conejoAcumulado = $conejoAcumulado;

        return $this;
    }
}
