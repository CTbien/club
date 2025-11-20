<?php

namespace App\Entity;

use App\Repository\AdherentsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AdherentsRepository::class)]
class Adherents
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    private ?string $prenom = null;

    #[ORM\Column(length: 255)]
    private ?string $mail = null;

    #[ORM\Column(length: 15)]
    private ?string $telephone = null;

    #[ORM\Column]
    private ?int $id_adherent = null;

    #[ORM\Column(length: 255)]
    private ?string $nom_adherent = null;

    #[ORM\Column(length: 255)]
    private ?string $prenom_adherent = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTime $date_naissance = null;

    #[ORM\Column(length: 255)]
    private ?string $adresse = null;

    #[ORM\Column]
    private ?int $code_postal = null;

    #[ORM\Column(length: 255)]
    private ?string $ville = null;

    #[ORM\Column(length: 255)]
    private ?string $telephone_adherent = null;

    #[ORM\Column(length: 255)]
    private ?string $email_adherent = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTime $date_inscription = null;

    #[ORM\Column(length: 255)]
    private ?string $photo = null;

    #[ORM\Column(length: 255)]
    private ?string $certificat_medicale = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $remarques = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): static
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function setMail(string $mail): static
    {
        $this->mail = $mail;

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

    public function getIdAdherent(): ?int
    {
        return $this->id_adherent;
    }

    public function setIdAdherent(int $id_adherent): static
    {
        $this->id_adherent = $id_adherent;

        return $this;
    }

    public function getNomAdherent(): ?string
    {
        return $this->nom_adherent;
    }

    public function setNomAdherent(string $nom_adherent): static
    {
        $this->nom_adherent = $nom_adherent;

        return $this;
    }

    public function getPrenomAdherent(): ?string
    {
        return $this->prenom_adherent;
    }

    public function setPrenomAdherent(string $prenom_adherent): static
    {
        $this->prenom_adherent = $prenom_adherent;

        return $this;
    }

    public function getDateNaissance(): ?\DateTime
    {
        return $this->date_naissance;
    }

    public function setDateNaissance(\DateTime $date_naissance): static
    {
        $this->date_naissance = $date_naissance;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): static
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getCodePostal(): ?int
    {
        return $this->code_postal;
    }

    public function setCodePostal(int $code_postal): static
    {
        $this->code_postal = $code_postal;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(string $ville): static
    {
        $this->ville = $ville;

        return $this;
    }

    public function getTelephoneAdherent(): ?string
    {
        return $this->telephone_adherent;
    }

    public function setTelephoneAdherent(string $telephone_adherent): static
    {
        $this->telephone_adherent = $telephone_adherent;

        return $this;
    }

    public function getEmailAdherent(): ?string
    {
        return $this->email_adherent;
    }

    public function setEmailAdherent(string $email_adherent): static
    {
        $this->email_adherent = $email_adherent;

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

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(string $photo): static
    {
        $this->photo = $photo;

        return $this;
    }

    public function getCertificatMedicale(): ?string
    {
        return $this->certificat_medicale;
    }

    public function setCertificatMedicale(string $certificat_medicale): static
    {
        $this->certificat_medicale = $certificat_medicale;

        return $this;
    }

    public function getRemarques(): ?string
    {
        return $this->remarques;
    }

    public function setRemarques(?string $remarques): static
    {
        $this->remarques = $remarques;

        return $this;
    }
}
