<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220830083050 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE listing ADD model_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE listing ADD CONSTRAINT FK_CB0048D47975B7E7 FOREIGN KEY (model_id) REFERENCES model (id)');
        $this->addSql('CREATE INDEX IDX_CB0048D47975B7E7 ON listing (model_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE listing DROP FOREIGN KEY FK_CB0048D47975B7E7');
        $this->addSql('DROP INDEX IDX_CB0048D47975B7E7 ON listing');
        $this->addSql('ALTER TABLE listing DROP model_id');
    }
}
