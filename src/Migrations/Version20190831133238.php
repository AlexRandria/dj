<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190831133238 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE form_entreprise (id INT AUTO_INCREMENT NOT NULL, date DATE DEFAULT NULL, type VARCHAR(100) DEFAULT NULL, nom_du_lieu VARCHAR(100) DEFAULT NULL, adresse_du_lieu VARCHAR(150) DEFAULT NULL, heure_debut VARCHAR(10) DEFAULT NULL, nb_personne INT DEFAULT NULL, nb_partie VARCHAR(50) DEFAULT NULL, format VARCHAR(50) DEFAULT NULL, formule INT DEFAULT NULL, nb_personne_formule INT DEFAULT NULL, duree_formule VARCHAR(20) DEFAULT NULL, theme VARCHAR(50) DEFAULT NULL, public VARCHAR(20) DEFAULT NULL, age INT DEFAULT NULL, nationalite VARCHAR(255) DEFAULT NULL, ambiance VARCHAR(255) DEFAULT NULL, ambiance_fin VARCHAR(255) DEFAULT NULL, style_dj VARCHAR(100) DEFAULT NULL, vetement_dj VARCHAR(50) DEFAULT NULL, repas_dj VARCHAR(5) DEFAULT NULL, habillage VARCHAR(10) DEFAULT NULL, options VARCHAR(255) DEFAULT NULL, fonction VARCHAR(50) DEFAULT NULL, nom_responsable VARCHAR(50) DEFAULT NULL, email_chef VARCHAR(255) DEFAULT NULL, numero_chef VARCHAR(10) DEFAULT NULL, nom VARCHAR(50) DEFAULT NULL, numero VARCHAR(10) DEFAULT NULL, adresse VARCHAR(50) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('DROP TABLE user');
        $this->addSql('ALTER TABLE code_postal CHANGE Nom_commune nom_commune VARCHAR(45) DEFAULT NULL');
        $this->addSql('ALTER TABLE formulaire DROP date_capture, CHANGE numero numero VARCHAR(35) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) DEFAULT NULL COLLATE utf8mb4_unicode_ci, roles JSON NOT NULL, password VARCHAR(255) DEFAULT NULL COLLATE utf8mb4_unicode_ci, UNIQUE INDEX email (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('DROP TABLE form_entreprise');
        $this->addSql('ALTER TABLE code_postal CHANGE nom_commune Nom_commune VARCHAR(38) DEFAULT NULL COLLATE utf8_general_ci');
        $this->addSql('ALTER TABLE formulaire ADD date_capture DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, CHANGE numero numero VARCHAR(10) DEFAULT NULL COLLATE utf8mb4_unicode_ci');
    }
}
