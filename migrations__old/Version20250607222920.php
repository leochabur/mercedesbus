<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250607222920 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE admin_articulos_conceptos (id INT AUTO_INCREMENT NOT NULL, nombre VARCHAR(255) NOT NULL, activo TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE admin_items_comprobante (id INT AUTO_INCREMENT NOT NULL, id_articulo INT DEFAULT NULL, id_comprobante INT DEFAULT NULL, cantidad DOUBLE PRECISION NOT NULL, precio_unitario DOUBLE PRECISION NOT NULL, precio_total DOUBLE PRECISION NOT NULL, descripcion VARCHAR(255) DEFAULT NULL, documento_pdf LONGBLOB NOT NULL, INDEX IDX_557EA41B3932A204 (id_articulo), INDEX IDX_557EA41B4DCC2375 (id_comprobante), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE admin_items_comprobante ADD CONSTRAINT FK_557EA41B3932A204 FOREIGN KEY (id_articulo) REFERENCES admin_articulos_conceptos (id)');
        $this->addSql('ALTER TABLE admin_items_comprobante ADD CONSTRAINT FK_557EA41B4DCC2375 FOREIGN KEY (id_comprobante) REFERENCES admin_comprobantes_transaccion (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE admin_items_comprobante DROP FOREIGN KEY FK_557EA41B3932A204');
        $this->addSql('ALTER TABLE admin_items_comprobante DROP FOREIGN KEY FK_557EA41B4DCC2375');
        $this->addSql('DROP TABLE admin_articulos_conceptos');
        $this->addSql('DROP TABLE admin_items_comprobante');
    }
}
