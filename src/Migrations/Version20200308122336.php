<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200308122336 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE piece ADD fichedevie_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE piece ADD CONSTRAINT FK_44CA0B2358E5483E FOREIGN KEY (fichedevie_id) REFERENCES fiche_vie (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_44CA0B2358E5483E ON piece (fichedevie_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE piece DROP FOREIGN KEY FK_44CA0B2358E5483E');
        $this->addSql('DROP INDEX UNIQ_44CA0B2358E5483E ON piece');
        $this->addSql('ALTER TABLE piece DROP fichedevie_id');
    }
}
