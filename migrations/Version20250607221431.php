<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250607221431 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE admin_tipos_comprobante (id INT AUTO_INCREMENT NOT NULL, tipo VARCHAR(255) NOT NULL, activo TINYINT(1) NOT NULL, requiere_info_completa TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE admin_comprobantes_transaccion ADD id_tpo_comp INT DEFAULT NULL, ADD id_cliente INT DEFAULT NULL, ADD punto_venta INT DEFAULT NULL, ADD numero INT NOT NULL, ADD letra VARCHAR(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE admin_comprobantes_transaccion ADD CONSTRAINT FK_A30E9E2A5824290E FOREIGN KEY (id_tpo_comp) REFERENCES admin_tipos_comprobante (id)');
        $this->addSql('ALTER TABLE admin_comprobantes_transaccion ADD CONSTRAINT FK_A30E9E2A2A813255 FOREIGN KEY (id_cliente) REFERENCES admin_entes_comerciales (id)');
        $this->addSql('CREATE INDEX IDX_A30E9E2A5824290E ON admin_comprobantes_transaccion (id_tpo_comp)');
        $this->addSql('CREATE INDEX IDX_A30E9E2A2A813255 ON admin_comprobantes_transaccion (id_cliente)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE admin_comprobantes_transaccion DROP FOREIGN KEY FK_A30E9E2A5824290E');
        $this->addSql('DROP TABLE admin_tipos_comprobante');
        $this->addSql('ALTER TABLE admin_comprobantes_transaccion DROP FOREIGN KEY FK_A30E9E2A2A813255');
        $this->addSql('DROP INDEX IDX_A30E9E2A5824290E ON admin_comprobantes_transaccion');
        $this->addSql('DROP INDEX IDX_A30E9E2A2A813255 ON admin_comprobantes_transaccion');
        $this->addSql('ALTER TABLE admin_comprobantes_transaccion DROP id_tpo_comp, DROP id_cliente, DROP punto_venta, DROP numero, DROP letra');
    }
}
