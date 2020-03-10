<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200309153233 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE fiche_calibrage (id INT AUTO_INCREMENT NOT NULL, section VARCHAR(255) NOT NULL, calibragepar VARCHAR(255) NOT NULL, date DATETIME NOT NULL, conforme VARCHAR(255) NOT NULL, ajusterconforme VARCHAR(255) NOT NULL, ajusternonconforme VARCHAR(255) NOT NULL, freq VARCHAR(255) NOT NULL, classe VARCHAR(255) NOT NULL, remarque VARCHAR(255) NOT NULL, m1 VARCHAR(255) NOT NULL, m2 VARCHAR(255) NOT NULL, m3 VARCHAR(255) NOT NULL, m4 VARCHAR(255) NOT NULL, m5 VARCHAR(255) NOT NULL, m6 VARCHAR(255) NOT NULL, m7 VARCHAR(255) NOT NULL, m8 VARCHAR(255) NOT NULL, m9 VARCHAR(255) NOT NULL, m10 VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE piece CHANGE fichedevie_id fichedevie_id INT DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE fiche_calibrage');
        $this->addSql('ALTER TABLE piece CHANGE fichedevie_id fichedevie_id INT DEFAULT NULL');
    }
}
