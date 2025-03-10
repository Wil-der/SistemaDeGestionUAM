<?php

namespace App\Entity;

use App\Repository\TipoCentroRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TipoCentroRepository::class)]
class TipoCentro
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nombreCentro = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombreCentro(): ?string
    {
        return $this->nombreCentro;
    }

    public function setNombreCentro(string $nombreCentro): static
    {
        $this->nombreCentro = $nombreCentro;

        return $this;
    }
}
