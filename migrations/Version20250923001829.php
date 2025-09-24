<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250923001829 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE `user` (id INT AUTO_INCREMENT NOT NULL, identifiant VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, nom VARCHAR(100) NOT NULL, prenom VARCHAR(100) NOT NULL, email_pro VARCHAR(255) NOT NULL, email_perso VARCHAR(255) DEFAULT NULL, telephone VARCHAR(15) NOT NULL, fonction VARCHAR(50) NOT NULL, metier VARCHAR(50) NOT NULL, bureau VARCHAR(50) NOT NULL, derniere_connexion DATETIME DEFAULT NULL, acces_gestion_utilisateurs TINYINT(1) NOT NULL, acces_gestion_equipes TINYINT(1) NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4 AUTO_INCREMENT=1001');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE `user`');
    }
}
