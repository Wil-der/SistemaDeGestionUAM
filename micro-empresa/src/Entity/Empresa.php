<?php

namespace App\Entity;

use App\Repository\EmpresaRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EmpresaRepository::class)]
class Empresa
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nombre = null;

    #[ORM\Column(length: 255)]
    private ?string $direccion = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $mision = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $vision = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $objetoSocial = null;

    #[ORM\Column(length: 255)]
    private ?string $telefono = null;

    #[ORM\Column(length: 255)]
    private ?string $director = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): static
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getDireccion(): ?string
    {
        return $this->direccion;
    }

    public function setDireccion(string $direccion): static
    {
        $this->direccion = $direccion;

        return $this;
    }

    public function getMision(): ?string
    {
        return $this->mision;
    }

    public function setMision(string $mision): static
    {
        $this->mision = $mision;

        return $this;
    }

    public function getVision(): ?string
    {
        return $this->vision;
    }

    public function setVision(string $vision): static
    {
        $this->vision = $vision;

        return $this;
    }

    public function getObjetoSocial(): ?string
    {
        return $this->objetoSocial;
    }

    public function setObjetoSocial(string $objetoSocial): static
    {
        $this->objetoSocial = $objetoSocial;

        return $this;
    }

    public function getTelefono(): ?string
    {
        return $this->telefono;
    }

    public function setTelefono(string $telefono): static
    {
        $this->telefono = $telefono;

        return $this;
    }

    public function getDirector(): ?string
    {
        return $this->director;
    }

    public function setDirector(string $director): static
    {
        $this->director = $director;

        return $this;
    }
}
