<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250620023553 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE guide_touristique ADD photo_filename VARCHAR(255) DEFAULT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE guide_touristique ADD telephone VARCHAR(20) DEFAULT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE guide_touristique RENAME COLUMN photo TO email
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE guide_touristique ALTER email TYPE VARCHAR(255)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE UNIQUE INDEX UNIQ_1AB8B65EE7927C74 ON guide_touristique (email)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE "user" ALTER nom TYPE VARCHAR(255)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE "user" ALTER nom DROP NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE "user" ALTER prenom TYPE VARCHAR(255)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE "user" ALTER prenom DROP NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE "user" ALTER email TYPE VARCHAR(180)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE visite ADD photo_filename VARCHAR(255) DEFAULT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE visite DROP photo
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE visite ALTER heure_fin TYPE TIME(0) WITHOUT TIME ZONE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE visite ALTER heure_fin DROP NOT NULL
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE visite ADD photo VARCHAR(255) NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE visite DROP photo_filename
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE visite ALTER heure_fin TYPE TIME(0) WITHOUT TIME ZONE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE visite ALTER heure_fin SET NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE "user" ALTER email TYPE VARCHAR(255)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE "user" ALTER nom TYPE VARCHAR(255)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE "user" ALTER nom SET NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE "user" ALTER prenom TYPE VARCHAR(255)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE "user" ALTER prenom SET NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX UNIQ_1AB8B65EE7927C74
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE guide_touristique DROP photo_filename
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE guide_touristique DROP telephone
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE guide_touristique RENAME COLUMN email TO photo
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE guide_touristique ALTER photo TYPE VARCHAR(255)
        SQL);
    }
}
