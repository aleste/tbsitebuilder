<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration,
    Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your need!
 */
class Version20130325135504 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is autogenerated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql");
        
        $this->addSql("ALTER TABLE Site CHANGE twitter twitter VARCHAR(255) DEFAULT NULL, CHANGE facebook facebook VARCHAR(255) DEFAULT NULL, CHANGE googleplus googleplus VARCHAR(255) DEFAULT NULL, CHANGE body_color body_color VARCHAR(10) DEFAULT NULL, CHANGE header_color header_color VARCHAR(10) DEFAULT NULL, CHANGE footer_color footer_color VARCHAR(10) DEFAULT NULL, CHANGE font_color font_color VARCHAR(10) DEFAULT NULL");
    }

    public function down(Schema $schema)
    {
        // this down() migration is autogenerated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql");
        
        $this->addSql("ALTER TABLE Site CHANGE twitter twitter VARCHAR(255) NOT NULL, CHANGE facebook facebook VARCHAR(255) NOT NULL, CHANGE googleplus googleplus VARCHAR(255) NOT NULL, CHANGE body_color body_color VARCHAR(10) NOT NULL, CHANGE header_color header_color VARCHAR(10) NOT NULL, CHANGE footer_color footer_color VARCHAR(10) NOT NULL, CHANGE font_color font_color VARCHAR(10) NOT NULL");
    }
}
