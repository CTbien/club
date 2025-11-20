<?php

namespace App\Entity;

use App\Repository\CoachRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CoachRepository::class)]
class Coach
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $id_coach = null;

    #[ORM\Column(length: 255)]
    private ?string $nom_coach = null;

    #[ORM\Column(length: 255)]
    private ?string $prenom_coach = null;

    #[ORM\Column(length: 255)]
    private ?string $specialite = null;

    #[ORM\Column(length: 255)]
    private ?string $telephone = null;

    #[ORM\Column(length: 255)]
    private ?string $email = null;

    #[ORM\Column(length: 255)]
    private ?string $diplomes = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTime $date_embauche = null;

    #[ORM\Column(length: 255)]
    private ?string $statut = null;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getNomCoach(): ?string
    {
        return $this->nom_coach;
    }

    public function setNomCoach(string $nom_coach): static
    {
        $this->nom_coach = $nom_coach;

        return $this;
    }

    public function getPrenomCoach(): ?string
    {
        return $this->prenom_coach;
    }

    public function setPrenomCoach(string $prenom_coach): static
    {
        $this->prenom_coach = $prenom_coach;

        return $this;
    }

    public function getSpecialite(): ?string
    {
        return $this->specialite;
    }

    public function setSpecialite(string $specialite): static
    {
        $this->specialite = $specialite;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(string $telephone): static
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getDiplomes(): ?string
    {
        return $this->diplomes;
    }

    public function setDiplomes(string $diplomes): static
    {
        $this->diplomes = $diplomes;

        return $this;
    }

    public function getDateEmbauche(): ?\DateTime
    {
        return $this->date_embauche;
    }

    public function setDateEmbauche(\DateTime $date_embauche): static
    {
        $this->date_embauche = $date_embauche;

        return $this;
    }

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(string $statut): static
    {
        $this->statut = $statut;

        return $this;
    }
}
