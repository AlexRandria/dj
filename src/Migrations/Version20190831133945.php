<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190831133945 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE code_postal (id INT AUTO_INCREMENT NOT NULL, nom_commune VARCHAR(45) DEFAULT NULL, code_postal VARCHAR(5) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE form_entreprise (id INT AUTO_INCREMENT NOT NULL, date DATE DEFAULT NULL, type VARCHAR(100) DEFAULT NULL, nom_du_lieu VARCHAR(100) DEFAULT NULL, adresse_du_lieu VARCHAR(150) DEFAULT NULL, heure_debut VARCHAR(10) DEFAULT NULL, nb_personne INT DEFAULT NULL, nb_partie VARCHAR(50) DEFAULT NULL, format VARCHAR(50) DEFAULT NULL, formule INT DEFAULT NULL, nb_personne_formule INT DEFAULT NULL, duree_formule VARCHAR(20) DEFAULT NULL, theme VARCHAR(50) DEFAULT NULL, public VARCHAR(20) DEFAULT NULL, age INT DEFAULT NULL, nationalite VARCHAR(255) DEFAULT NULL, ambiance VARCHAR(255) DEFAULT NULL, ambiance_fin VARCHAR(255) DEFAULT NULL, style_dj VARCHAR(100) DEFAULT NULL, vetement_dj VARCHAR(50) DEFAULT NULL, repas_dj VARCHAR(5) DEFAULT NULL, habillage VARCHAR(10) DEFAULT NULL, options VARCHAR(255) DEFAULT NULL, fonction VARCHAR(50) DEFAULT NULL, nom_responsable VARCHAR(50) DEFAULT NULL, email_chef VARCHAR(255) DEFAULT NULL, numero_chef VARCHAR(10) DEFAULT NULL, nom VARCHAR(50) DEFAULT NULL, numero VARCHAR(10) DEFAULT NULL, adresse VARCHAR(50) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE formulaire (id INT AUTO_INCREMENT NOT NULL, code_postal VARCHAR(30) DEFAULT NULL, date DATE DEFAULT NULL, nom_du_lieu VARCHAR(45) DEFAULT NULL, heure_de_debut TIME DEFAULT NULL, deroulement VARCHAR(45) DEFAULT NULL, nb_personne INT DEFAULT NULL, ambiance VARCHAR(45) DEFAULT NULL, budget VARCHAR(20) DEFAULT NULL, champ_libre VARCHAR(255) DEFAULT NULL, nom VARCHAR(50) DEFAULT NULL, prenom VARCHAR(25) DEFAULT NULL, email VARCHAR(35) DEFAULT NULL, numero VARCHAR(35) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE code_postal');
        $this->addSql('DROP TABLE form_entreprise');
        $this->addSql('DROP TABLE formulaire');
    }
}
