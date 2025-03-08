<?php

namespace App\Entity;

use App\Repository\Campana1Repository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: Campana1Repository::class)]
class Campana1
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
    private ?int $roturadasPlan = null;

    #[ORM\Column(nullable: true)]
    private ?int $roturadasReal = null;

    #[ORM\Column(nullable: true)]
    private ?int $sembradasPlan = null;

    #[ORM\Column(nullable: true)]
    private ?int $sembradasReal = null;

    #[ORM\Column(nullable: true)]
    private ?int $roturadasPapaArrozPlan = null;

    #[ORM\Column(nullable: true)]
    private ?int $roturadasPapaArrozReal = null;

    #[ORM\Column(nullable: true)]
    private ?int $sembradasPapaArrozPlan = null;

    #[ORM\Column(nullable: true)]
    private ?int $sembradasPapaArrozReal = null;

    #[ORM\Column(nullable: true)]
    private ?int $otrasProducciones = null;

    #[ORM\Column(nullable: true)]
    private ?int $otrasProduccionesReal = null;

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

    public function getRoturadasPlan(): ?int
    {
        return $this->roturadasPlan;
    }

    public function setRoturadasPlan(?int $roturadasPlan): static
    {
        $this->roturadasPlan = $roturadasPlan;

        return $this;
    }

    public function getRoturadasReal(): ?int
    {
        return $this->roturadasReal;
    }

    public function setRoturadasReal(?int $roturadasReal): static
    {
        $this->roturadasReal = $roturadasReal;

        return $this;
    }

    public function getSembradasPlan(): ?int
    {
        return $this->sembradasPlan;
    }

    public function setSembradasPlan(?int $sembradasPlan): static
    {
        $this->sembradasPlan = $sembradasPlan;

        return $this;
    }

    public function getSembradasReal(): ?int
    {
        return $this->sembradasReal;
    }

    public function setSembradasReal(?int $sembradasReal): static
    {
        $this->sembradasReal = $sembradasReal;

        return $this;
    }

    public function getRoturadasPapaArrozPlan(): ?int
    {
        return $this->roturadasPapaArrozPlan;
    }

    public function setRoturadasPapaArrozPlan(?int $roturadasPapaArrozPlan): static
    {
        $this->roturadasPapaArrozPlan = $roturadasPapaArrozPlan;

        return $this;
    }

    public function getRoturadasPapaArrozReal(): ?int
    {
        return $this->roturadasPapaArrozReal;
    }

    public function setRoturadasPapaArrozReal(?int $roturadasPapaArrozReal): static
    {
        $this->roturadasPapaArrozReal = $roturadasPapaArrozReal;

        return $this;
    }

    public function getSembradasPapaArrozPlan(): ?int
    {
        return $this->sembradasPapaArrozPlan;
    }

    public function setSembradasPapaArrozPlan(?int $sembradasPapaArrozPlan): static
    {
        $this->sembradasPapaArrozPlan = $sembradasPapaArrozPlan;

        return $this;
    }

    public function getSembradasPapaArrozReal(): ?int
    {
        return $this->sembradasPapaArrozReal;
    }

    public function setSembradasPapaArrozReal(?int $sembradasPapaArrozReal): static
    {
        $this->sembradasPapaArrozReal = $sembradasPapaArrozReal;

        return $this;
    }

    public function getOtrasProducciones(): ?int
    {
        return $this->otrasProducciones;
    }

    public function setOtrasProducciones(?int $otrasProducciones): static
    {
        $this->otrasProducciones = $otrasProducciones;

        return $this;
    }

    public function getOtrasProduccionesReal(): ?int
    {
        return $this->otrasProduccionesReal;
    }

    public function setOtrasProduccionesReal(?int $otrasProduccionesReal): static
    {
        $this->otrasProduccionesReal = $otrasProduccionesReal;

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
