<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20251127134156 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE abonnements (id INT AUTO_INCREMENT NOT NULL, id_abonnement INT NOT NULL, id_adherent INT NOT NULL, type_abonnement VARCHAR(255) NOT NULL, date_debut DATE NOT NULL, date_fin DATE NOT NULL, montant VARCHAR(255) NOT NULL, statut_paiement VARCHAR(255) NOT NULL, methode_paiement VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE activites (id INT AUTO_INCREMENT NOT NULL, id_activite INT NOT NULL, nom_activite VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, niveau_requis VARCHAR(255) NOT NULL, capacite_max VARCHAR(255) NOT NULL, tarif_supplementaire VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE adherents (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, mail VARCHAR(255) NOT NULL, telephone VARCHAR(15) NOT NULL, id_adherent INT NOT NULL, nom_adherent VARCHAR(255) NOT NULL, prenom_adherent VARCHAR(255) NOT NULL, date_naissance DATE NOT NULL, adresse VARCHAR(255) NOT NULL, code_postal INT NOT NULL, ville VARCHAR(255) NOT NULL, telephone_adherent VARCHAR(255) NOT NULL, email_adherent VARCHAR(255) NOT NULL, date_inscription DATE NOT NULL, photo VARCHAR(255) NOT NULL, certificat_medicale VARCHAR(255) NOT NULL, remarques VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE coach (id INT AUTO_INCREMENT NOT NULL, id_coach INT NOT NULL, nom_coach VARCHAR(255) NOT NULL, prenom_coach VARCHAR(255) NOT NULL, specialite VARCHAR(255) NOT NULL, telephone VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, diplomes VARCHAR(255) NOT NULL, date_embauche DATE NOT NULL, statut VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE competition (id INT AUTO_INCREMENT NOT NULL, id_competition INT NOT NULL, nom_competition VARCHAR(255) NOT NULL, date_debut DATE NOT NULL, date_fin DATE NOT NULL, lieu VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, niveau VARCHAR(255) NOT NULL, frais_inscription VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE equipements (id INT AUTO_INCREMENT NOT NULL, id_equipement INT NOT NULL, nom_equipement VARCHAR(255) NOT NULL, descirption VARCHAR(255) DEFAULT NULL, date_acquisition DATE NOT NULL, etat VARCHAR(255) NOT NULL, disponibilite VARCHAR(255) NOT NULL, localisation VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE facture (id INT AUTO_INCREMENT NOT NULL, id_facture INT NOT NULL, id_adherent INT NOT NULL, date_emission DATE NOT NULL, montant_total VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, statut_paiement VARCHAR(255) NOT NULL, date_paiement DATE NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE inscriptions_activite (id INT AUTO_INCREMENT NOT NULL, id_inscription_activite INT NOT NULL, id_adherent INT NOT NULL, id_activite INT NOT NULL, date_inscription DATE NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE sessions (id INT AUTO_INCREMENT NOT NULL, id_sessiob INT NOT NULL, id_activite INT NOT NULL, id_coach INT NOT NULL, jour_semaine VARCHAR(255) NOT NULL, heure_debut TIME NOT NULL, heure_fin TIME NOT NULL, salle VARCHAR(255) NOT NULL, capacite_max VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE utilisateur (id INT AUTO_INCREMENT NOT NULL, id_utilisateur INT NOT NULL, login VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, nom_user VARCHAR(255) NOT NULL, prenom_user VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, role VARCHAR(255) NOT NULL, derniere_connexion VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE abonnements');
        $this->addSql('DROP TABLE activites');
        $this->addSql('DROP TABLE adherents');
        $this->addSql('DROP TABLE coach');
        $this->addSql('DROP TABLE competition');
        $this->addSql('DROP TABLE equipements');
        $this->addSql('DROP TABLE facture');
        $this->addSql('DROP TABLE inscriptions_activite');
        $this->addSql('DROP TABLE sessions');
        $this->addSql('DROP TABLE utilisateur');
    }
}
