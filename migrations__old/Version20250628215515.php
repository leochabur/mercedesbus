<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250628215515 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE finanzas_mov_ctas_ctes DROP FOREIGN KEY FK_23CF68E6649E9D17');
        $this->addSql('CREATE TABLE finanzas_metodo_pago_recibo (id INT AUTO_INCREMENT NOT NULL, importe DOUBLE PRECISION NOT NULL, discr VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('DROP TABLE comprobante_transaccion');
        $this->addSql('DROP TABLE recibo');
        $this->addSql('ALTER TABLE admin_comprobantes_transaccion DROP FOREIGN KEY FK_A30E9E2A2A813255');
        $this->addSql('DROP INDEX IDX_A30E9E2A2A813255 ON admin_comprobantes_transaccion');
        $this->addSql('ALTER TABLE admin_comprobantes_transaccion CHANGE id_cliente id_ente_comercial INT DEFAULT NULL');
        $this->addSql('ALTER TABLE admin_comprobantes_transaccion ADD CONSTRAINT FK_A30E9E2A557E7E9D FOREIGN KEY (id_ente_comercial) REFERENCES admin_entes_comerciales (id)');
        $this->addSql('CREATE INDEX IDX_A30E9E2A557E7E9D ON admin_comprobantes_transaccion (id_ente_comercial)');
        $this->addSql('ALTER TABLE finanzas_mov_ctas_ctes DROP FOREIGN KEY FK_23CF68E6649E9D17');
        $this->addSql('ALTER TABLE finanzas_mov_ctas_ctes ADD CONSTRAINT FK_23CF68E6649E9D17 FOREIGN KEY (id_recibo) REFERENCES admin_comprobantes_transaccion (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE comprobante_transaccion (id INT AUTO_INCREMENT NOT NULL, punto_venta INT NOT NULL, numero INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE recibo (id INT AUTO_INCREMENT NOT NULL, fecha DATE NOT NULL, importe DOUBLE PRECISION NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('DROP TABLE finanzas_metodo_pago_recibo');
        $this->addSql('ALTER TABLE admin_comprobantes_transaccion DROP FOREIGN KEY FK_A30E9E2A557E7E9D');
        $this->addSql('DROP INDEX IDX_A30E9E2A557E7E9D ON admin_comprobantes_transaccion');
        $this->addSql('ALTER TABLE admin_comprobantes_transaccion CHANGE id_ente_comercial id_cliente INT DEFAULT NULL');
        $this->addSql('ALTER TABLE admin_comprobantes_transaccion ADD CONSTRAINT FK_A30E9E2A2A813255 FOREIGN KEY (id_cliente) REFERENCES admin_entes_comerciales (id)');
        $this->addSql('CREATE INDEX IDX_A30E9E2A2A813255 ON admin_comprobantes_transaccion (id_cliente)');
        $this->addSql('ALTER TABLE finanzas_mov_ctas_ctes DROP FOREIGN KEY FK_23CF68E6649E9D17');
        $this->addSql('ALTER TABLE finanzas_mov_ctas_ctes ADD CONSTRAINT FK_23CF68E6649E9D17 FOREIGN KEY (id_recibo) REFERENCES recibo (id)');
    }
}
