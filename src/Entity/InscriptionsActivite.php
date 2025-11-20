<?php

namespace App\Entity;

use App\Repository\InscriptionsActiviteRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: InscriptionsActiviteRepository::class)]
class InscriptionsActivite
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $id_inscription_activite = null;

    #[ORM\Column]
    private ?int $id_adherent = null;

    #[ORM\Column]
    private ?int $id_activite = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTime $date_inscription = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdInscriptionActivite(): ?int
    {
        return $this->id_inscription_activite;
    }

    public function setIdInscriptionActivite(int $id_inscription_activite): static
    {
        $this->id_inscription_activite = $id_inscription_activite;

        return $this;
    }

    public function getIdAdherent(): ?int
    {
        return $this->id_adherent;
    }

    public function setIdAdherent(int $id_adherent): static
    {
        $this->id_adherent = $id_adherent;

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

    public function getDateInscription(): ?\DateTime
    {
        return $this->date_inscription;
    }

    public function setDateInscription(\DateTime $date_inscription): static
    {
        $this->date_inscription = $date_inscription;

        return $this;
    }
}
