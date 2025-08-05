<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250805212841 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE admin_articulos_conceptos_clientes (id INT AUTO_INCREMENT NOT NULL, id_ente_comercial INT DEFAULT NULL, id_articulo INT DEFAULT NULL, importe DOUBLE PRECISION NOT NULL, ciclo_facturacion INT NOT NULL, INDEX IDX_24523690557E7E9D (id_ente_comercial), INDEX IDX_245236903932A204 (id_articulo), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE admin_articulos_conceptos_clientes ADD CONSTRAINT FK_24523690557E7E9D FOREIGN KEY (id_ente_comercial) REFERENCES admin_entes_comerciales (id)');
        $this->addSql('ALTER TABLE admin_articulos_conceptos_clientes ADD CONSTRAINT FK_245236903932A204 FOREIGN KEY (id_articulo) REFERENCES admin_articulos_conceptos (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE admin_articulos_conceptos_clientes DROP FOREIGN KEY FK_24523690557E7E9D');
        $this->addSql('ALTER TABLE admin_articulos_conceptos_clientes DROP FOREIGN KEY FK_245236903932A204');
        $this->addSql('DROP TABLE admin_articulos_conceptos_clientes');
    }
}
