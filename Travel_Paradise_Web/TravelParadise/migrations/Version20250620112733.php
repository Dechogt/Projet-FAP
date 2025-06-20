<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250620112733 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE visite ADD prix NUMERIC(10, 2) NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE visite ADD nombre_max_visiteurs INT NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE visite ALTER commentaire TYPE TEXT
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE visite ALTER commentaire DROP NOT NULL
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE visite DROP prix
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE visite DROP nombre_max_visiteurs
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE visite ALTER commentaire TYPE TEXT
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE visite ALTER commentaire SET NOT NULL
        SQL);
    }
}
