<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221030061423 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE simcards (id INT AUTO_INCREMENT NOT NULL, phone_id INT NOT NULL, slot SMALLINT NOT NULL, mobile_number VARCHAR(20) NOT NULL, imsi VARCHAR(100) NOT NULL, expiration DATE NOT NULL, mobilnet_expiration DATE NOT NULL, mobilnet_data_limit INT NOT NULL, mobilnet_ip VARCHAR(100) NOT NULL, carrier_id INT NOT NULL, package VARCHAR(100) NOT NULL, type_id INT NOT NULL, activated SMALLINT NOT NULL, comment VARCHAR(255) NOT NULL, creator INT NOT NULL, created DATETIME NOT NULL, updater INT NOT NULL, updated DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE simcards');
    }
}
