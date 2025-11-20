<?php

namespace App\Entity;

use App\Repository\SessionsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SessionsRepository::class)]
class Sessions
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $id_sessiob = null;

    #[ORM\Column]
    private ?int $id_activite = null;

    #[ORM\Column]
    private ?int $id_coach = null;

    #[ORM\Column(length: 255)]
    private ?string $jour_semaine = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTime $heure_debut = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTime $heure_fin = null;

    #[ORM\Column(length: 255)]
    private ?string $salle = null;

    #[ORM\Column(length: 255)]
    private ?string $capacite_max = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdSessiob(): ?int
    {
        return $this->id_sessiob;
    }

    public function setIdSessiob(int $id_sessiob): static
    {
        $this->id_sessiob = $id_sessiob;

        return $this;
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

    public function getIdCoach(): ?int
    {
        return $this->id_coach;
    }

    public function setIdCoach(int $id_coach): static
    {
        $this->id_coach = $id_coach;

        return $this;
    }

    public function getJourSemaine(): ?string
    {
        return $this->jour_semaine;
    }

    public function setJourSemaine(string $jour_semaine): static
    {
        $this->jour_semaine = $jour_semaine;

        return $this;
    }

    public function getHeureDebut(): ?\DateTime
    {
        return $this->heure_debut;
    }

    public function setHeureDebut(\DateTime $heure_debut): static
    {
        $this->heure_debut = $heure_debut;

        return $this;
    }

    public function getHeureFin(): ?\DateTime
    {
        return $this->heure_fin;
    }

    public function setHeureFin(\DateTime $heure_fin): static
    {
        $this->heure_fin = $heure_fin;

        return $this;
    }

    public function getSalle(): ?string
    {
        return $this->salle;
    }

    public function setSalle(string $salle): static
    {
        $this->salle = $salle;

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
}
