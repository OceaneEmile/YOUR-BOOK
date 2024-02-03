<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240131204120 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE emprunt CHANGE adherent_id adherent_id INT NOT NULL, CHANGE exemplaire_id exemplaire_id INT NOT NULL, CHANGE date_emprunt date_emprunt DATETIME NOT NULL, CHANGE statut statut TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE exemplaire CHANGE usure_id usure_id INT NOT NULL, CHANGE stock_id stock_id INT NOT NULL, CHANGE livre_id livre_id INT NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE emprunt CHANGE adherent_id adherent_id INT DEFAULT NULL, CHANGE exemplaire_id exemplaire_id INT DEFAULT NULL, CHANGE date_emprunt date_emprunt DATETIME DEFAULT NULL, CHANGE statut statut TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE exemplaire CHANGE usure_id usure_id INT DEFAULT NULL, CHANGE stock_id stock_id INT DEFAULT NULL, CHANGE livre_id livre_id INT DEFAULT NULL');
    }
}
