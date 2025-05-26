<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250525124955 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE rrhh_empleados (id INT AUTO_INCREMENT NOT NULL, id_puesto INT DEFAULT NULL, apellido VARCHAR(255) NOT NULL, nombre VARCHAR(255) NOT NULL, legajo INT NOT NULL, direccion VARCHAR(255) DEFAULT NULL, telefono VARCHAR(255) DEFAULT NULL, cuil INT DEFAULT NULL, dni INT DEFAULT NULL, fecha_ingreso DATETIME DEFAULT NULL, INDEX IDX_F4FF456C61F46733 (id_puesto), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE rrhh_empleados ADD CONSTRAINT FK_F4FF456C61F46733 FOREIGN KEY (id_puesto) REFERENCES rrhh_puestos (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE rrhh_empleados DROP FOREIGN KEY FK_F4FF456C61F46733');
        $this->addSql('DROP TABLE rrhh_empleados');
    }
}
