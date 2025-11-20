<?php

namespace App\Entity;

use App\Repository\EquipementsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EquipementsRepository::class)]
class Equipements
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $id_equipement = null;

    #[ORM\Column(length: 255)]
    private ?string $nom_equipement = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $descirption = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTime $date_acquisition = null;

    #[ORM\Column(length: 255)]
    private ?string $etat = null;

    #[ORM\Column(length: 255)]
    private ?string $disponibilite = null;

    #[ORM\Column(length: 255)]
    private ?string $localisation = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdEquipement(): ?int
    {
        return $this->id_equipement;
    }

    public function setIdEquipement(int $id_equipement): static
    {
        $this->id_equipement = $id_equipement;

        return $this;
    }

    public function getNomEquipement(): ?string
    {
        return $this->nom_equipement;
    }

    public function setNomEquipement(string $nom_equipement): static
    {
        $this->nom_equipement = $nom_equipement;

        return $this;
    }

    public function getDescirption(): ?string
    {
        return $this->descirption;
    }

    public function setDescirption(?string $descirption): static
    {
        $this->descirption = $descirption;

        return $this;
    }

    public function getDateAcquisition(): ?\DateTime
    {
        return $this->date_acquisition;
    }

    public function setDateAcquisition(\DateTime $date_acquisition): static
    {
        $this->date_acquisition = $date_acquisition;

        return $this;
    }

    public function getEtat(): ?string
    {
        return $this->etat;
    }

    public function setEtat(string $etat): static
    {
        $this->etat = $etat;

        return $this;
    }

    public function getDisponibilite(): ?string
    {
        return $this->disponibilite;
    }

    public function setDisponibilite(string $disponibilite): static
    {
        $this->disponibilite = $disponibilite;

        return $this;
    }

    public function getLocalisation(): ?string
    {
        return $this->localisation;
    }

    public function setLocalisation(string $localisation): static
    {
        $this->localisation = $localisation;

        return $this;
    }
}
