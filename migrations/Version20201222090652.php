<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201222090652 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE acteur (id INT AUTO_INCREMENT NOT NULL, nom_prenom VARCHAR(255) NOT NULL, date_naissance DATE NOT NULL, nationalite VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('DROP TABLE conges');
        $this->addSql('DROP TABLE historiques');
        $this->addSql('DROP TABLE users');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE conges (id INT AUTO_INCREMENT NOT NULL, date_debut TEXT CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, date_fin TEXT CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, Nbrjours TEXT CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, commentaire TEXT CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, type TEXT CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, Etat TEXT CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, created TEXT CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, userId TEXT CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = MyISAM COMMENT = \'\' ');
        $this->addSql('CREATE TABLE historiques (id INT AUTO_INCREMENT NOT NULL, userId INT NOT NULL, congeId INT NOT NULL, commentaire TEXT CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, user_name VARCHAR(255) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, EtatHistory VARCHAR(200) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, date_creation TEXT CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = MyISAM COMMENT = \'\' ');
        $this->addSql('CREATE TABLE users (id INT AUTO_INCREMENT NOT NULL, first_name TEXT CHARACTER SET latin1 DEFAULT NULL COLLATE `latin1_swedish_ci`, last_name TEXT CHARACTER SET latin1 DEFAULT NULL COLLATE `latin1_swedish_ci`, email TEXT CHARACTER SET latin1 DEFAULT NULL COLLATE `latin1_swedish_ci`, password TEXT CHARACTER SET latin1 DEFAULT NULL COLLATE `latin1_swedish_ci`, type TEXT CHARACTER SET latin1 DEFAULT NULL COLLATE `latin1_swedish_ci`, created TEXT CHARACTER SET latin1 DEFAULT NULL COLLATE `latin1_swedish_ci`, date_recrutement TEXT CHARACTER SET latin1 DEFAULT NULL COLLATE `latin1_swedish_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = MyISAM COMMENT = \'\' ');
        $this->addSql('DROP TABLE acteur');
    }
}
