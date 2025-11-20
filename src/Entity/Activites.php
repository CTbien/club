<?php

namespace App\Entity;

use App\Repository\ActivitesRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ActivitesRepository::class)]
class Activites
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $id_activite = null;

    #[ORM\Column(length: 255)]
    private ?string $nom_activite = null;

    #[ORM\Column(length: 255)]
    private ?string $description = null;

    #[ORM\Column(length: 255)]
    private ?string $niveau_requis = null;

    #[ORM\Column(length: 255)]
    private ?string $capacite_max = null;

    #[ORM\Column(length: 255)]
    private ?string $tarif_supplementaire = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdActivite(): ?int
    {
        return $this->id_activite;
    }

    public function setIdActivite(int $id_activite): static
    {
        $this->id_activite = $id_activite;

        return $this;
    }

    public function getNomActivite(): ?string
    {
        return $this->nom_activite;
    }

    public function setNomActivite(string $nom_activite): static
    {
        $this->nom_activite = $nom_activite;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getNiveauRequis(): ?string
    {
        return $this->niveau_requis;
    }

    public function setNiveauRequis(string $niveau_requis): static
    {
        $this->niveau_requis = $niveau_requis;

        return $this;
    }

    public function getCapaciteMax(): ?string
    {
        return $this->capacite_max;
    }

    public function setCapaciteMax(string $capacite_max): static
    {
        $this->capacite_max = $capacite_max;

        return $this;
    }

    public function getTarifSupplementaire(): ?string
    {
        return $this->tarif_supplementaire;
    }

    public function setTarifSupplementaire(string $tarif_supplementaire): static
    {
        $this->tarif_supplementaire = $tarif_supplementaire;

        return $this;
    }
}
