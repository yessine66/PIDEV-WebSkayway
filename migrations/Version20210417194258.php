<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210417194258 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE actualite CHANGE id_ev id_ev INT DEFAULT NULL');
        $this->addSql('ALTER TABLE admin CHANGE id id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE certificat CHANGE id_certif id_certif INT AUTO_INCREMENT NOT NULL, CHANGE id id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE feedback CHANGE id id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE question ADD id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE question ADD CONSTRAINT FK_B6F7494EBF396750 FOREIGN KEY (id) REFERENCES utilisateur (id)');
        $this->addSql('CREATE INDEX id ON question (id)');
        $this->addSql('ALTER TABLE reclamation CHANGE id id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE reponse CHANGE id_r id_r INT AUTO_INCREMENT NOT NULL, CHANGE id_q id_q INT DEFAULT NULL, CHANGE id id INT DEFAULT NULL, CHANGE text_r1 text_r1 VARCHAR(250) DEFAULT NULL');
        $this->addSql('ALTER TABLE test CHANGE id_test id_test INT AUTO_INCREMENT NOT NULL, CHANGE id id INT DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE actualite CHANGE id_ev id_ev INT NOT NULL');
        $this->addSql('ALTER TABLE admin CHANGE id id INT NOT NULL');
        $this->addSql('ALTER TABLE certificat CHANGE id_certif id_certif INT NOT NULL, CHANGE id id INT NOT NULL');
        $this->addSql('ALTER TABLE feedback CHANGE id id INT NOT NULL');
        $this->addSql('ALTER TABLE question DROP FOREIGN KEY FK_B6F7494EBF396750');
        $this->addSql('DROP INDEX id ON question');
        $this->addSql('ALTER TABLE question DROP id');
        $this->addSql('ALTER TABLE reclamation CHANGE id id INT NOT NULL');
        $this->addSql('ALTER TABLE reponse CHANGE id_r id_r INT NOT NULL, CHANGE id id INT NOT NULL, CHANGE id_q id_q INT NOT NULL, CHANGE text_r1 text_r1 VARCHAR(250) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`');
        $this->addSql('ALTER TABLE test CHANGE id_test id_test INT NOT NULL, CHANGE id id INT NOT NULL');
    }
}
