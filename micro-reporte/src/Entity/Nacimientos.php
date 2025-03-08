<?php

namespace App\Entity;

use App\Repository\NacimientosRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: NacimientosRepository::class)]
class Nacimientos
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
    private ?int $vacunoHoy = null;

    #[ORM\Column(nullable: true)]
    private ?int $vacunoAcumulado = null;

    #[ORM\Column(nullable: true)]
    private ?int $ovinohoy = null;

    #[ORM\Column(nullable: true)]
    private ?int $ovinoAcumulado = null;

    #[ORM\Column(nullable: true)]
    private ?int $porcinoHoy = null;

    #[ORM\Column(nullable: true)]
    private ?int $porcinoAcumulado = null;

    #[ORM\Column(nullable: true)]
    private ?int $equinoHoy = null;

    #[ORM\Column(nullable: true)]
    private ?int $equinoAcumulado = null;

    #[ORM\Column(nullable: true)]
    private ?int $totalhoy = null;

    #[ORM\Column(nullable: true)]
    private ?int $totalAcumulado = null;

    #[ORM\Column(nullable: true)]
    private ?array $total = null;

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

    public function getVacunoHoy(): ?int
    {
        return $this->vacunoHoy;
    }

    public function setVacunoHoy(?int $vacunoHoy): static
    {
        $this->vacunoHoy = $vacunoHoy;

        return $this;
    }

    public function getVacunoAcumulado(): ?int
    {
        return $this->vacunoAcumulado;
    }

    public function setVacunoAcumulado(?int $vacunoAcumulado): static
    {
        $this->vacunoAcumulado = $vacunoAcumulado;

        return $this;
    }

    public function getOvinohoy(): ?int
    {
        return $this->ovinohoy;
    }

    public function setOvinohoy(?int $ovinohoy): static
    {
        $this->ovinohoy = $ovinohoy;

        return $this;
    }

    public function getOvinoAcumulado(): ?int
    {
        return $this->ovinoAcumulado;
    }

    public function setOvinoAcumulado(?int $ovinoAcumulado): static
    {
        $this->ovinoAcumulado = $ovinoAcumulado;

        return $this;
    }

    public function getPorcinoHoy(): ?int
    {
        return $this->porcinoHoy;
    }

    public function setPorcinoHoy(?int $porcinoHoy): static
    {
        $this->porcinoHoy = $porcinoHoy;

        return $this;
    }

    public function getPorcinoAcumulado(): ?int
    {
        return $this->porcinoAcumulado;
    }

    public function setPorcinoAcumulado(?int $porcinoAcumulado): static
    {
        $this->porcinoAcumulado = $porcinoAcumulado;

        return $this;
    }

    public function getEquinoHoy(): ?int
    {
        return $this->equinoHoy;
    }

    public function setEquinoHoy(?int $equinoHoy): static
    {
        $this->equinoHoy = $equinoHoy;

        return $this;
    }

    public function getEquinoAcumulado(): ?int
    {
        return $this->equinoAcumulado;
    }

    public function setEquinoAcumulado(?int $equinoAcumulado): static
    {
        $this->equinoAcumulado = $equinoAcumulado;

        return $this;
    }

    public function getTotalhoy(): ?int
    {
        return $this->totalhoy;
    }

    public function setTotalhoy(?int $totalhoy): static
    {
        $this->totalhoy = $totalhoy;

        return $this;
    }

    public function getTotalAcumulado(): ?int
    {
        return $this->totalAcumulado;
    }

    public function setTotalAcumulado(?int $totalAcumulado): static
    {
        $this->totalAcumulado = $totalAcumulado;

        return $this;
    }

    public function getTotal(): ?array
    {
        return $this->total;
    }

    public function setTotal(?array $total): static
    {
        $this->total = $total;

        return $this;
    }
}
