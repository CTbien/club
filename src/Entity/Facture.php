<?php

namespace App\Entity;

use App\Repository\FactureRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FactureRepository::class)]
class Facture
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $id_facture = null;

    #[ORM\Column]
    private ?int $id_adherent = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTime $date_emission = null;

    #[ORM\Column(length: 255)]
    private ?string $montant_total = null;

    #[ORM\Column(length: 255)]
    private ?string $description = null;

    #[ORM\Column(length: 255)]
    private ?string $statut_paiement = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTime $date_paiement = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdFacture(): ?int
    {
        return $this->id_facture;
    }

    public function setIdFacture(int $id_facture): static
    {
        $this->id_facture = $id_facture;

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

    public function getDateEmission(): ?\DateTime
    {
        return $this->date_emission;
    }

    public function setDateEmission(\DateTime $date_emission): static
    {
        $this->date_emission = $date_emission;

        return $this;
    }

    public function getMontantTotal(): ?string
    {
        return $this->montant_total;
    }

    public function setMontantTotal(string $montant_total): static
    {
        $this->montant_total = $montant_total;

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

    public function getStatutPaiement(): ?string
    {
        return $this->statut_paiement;
    }

    public function setStatutPaiement(string $statut_paiement): static
    {
        $this->statut_paiement = $statut_paiement;

        return $this;
    }

    public function getDatePaiement(): ?\DateTime
    {
        return $this->date_paiement;
    }

    public function setDatePaiement(\DateTime $date_paiement): static
    {
        $this->date_paiement = $date_paiement;

        return $this;
    }
}
