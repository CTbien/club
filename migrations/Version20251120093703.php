<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20251120093703 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE abonnements ADD id_adherent INT NOT NULL, ADD type_abonnement VARCHAR(255) NOT NULL, ADD date_debut DATE NOT NULL, ADD date_fin DATE NOT NULL, ADD montant VARCHAR(255) NOT NULL, ADD statut_paiement VARCHAR(255) NOT NULL, ADD methode_paiement VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE abonnements DROP id_adherent, DROP type_abonnement, DROP date_debut, DROP date_fin, DROP montant, DROP statut_paiement, DROP methode_paiement');
    }
}
