<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250628221653 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE admin_articulos_conceptos (id INT AUTO_INCREMENT NOT NULL, nombre VARCHAR(255) NOT NULL, activo TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE admin_comprobantes_transaccion (id INT AUTO_INCREMENT NOT NULL, id_tpo_comp INT DEFAULT NULL, id_letra INT DEFAULT NULL, id_ente_comercial INT DEFAULT NULL, fecha DATE NOT NULL, punto_venta INT DEFAULT NULL, numero INT NOT NULL, letra VARCHAR(1) DEFAULT NULL, documento_pdf LONGBLOB DEFAULT NULL, precio_total_sin_iva DOUBLE PRECISION NOT NULL, precio_total_con_iva DOUBLE PRECISION NOT NULL, precio_iva DOUBLE PRECISION NOT NULL, afecta_cta_cte TINYINT(1) NOT NULL, discr VARCHAR(255) NOT NULL, INDEX IDX_A30E9E2A5824290E (id_tpo_comp), INDEX IDX_A30E9E2ACD9A166 (id_letra), INDEX IDX_A30E9E2A557E7E9D (id_ente_comercial), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE admin_entes_comerciales (id INT AUTO_INCREMENT NOT NULL, id_resp_iva INT DEFAULT NULL, razon_social VARCHAR(255) NOT NULL, cuit INT NOT NULL, activo TINYINT(1) NOT NULL, direccion VARCHAR(255) DEFAULT NULL, telefono VARCHAR(255) DEFAULT NULL, mail VARCHAR(255) DEFAULT NULL, discr VARCHAR(255) NOT NULL, INDEX IDX_8CF29E63E1DE3916 (id_resp_iva), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE admin_identificacion_comprobante (id INT AUTO_INCREMENT NOT NULL, letra VARCHAR(1) NOT NULL, activo TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE admin_items_comprobante (id INT AUTO_INCREMENT NOT NULL, id_articulo INT DEFAULT NULL, id_comprobante INT DEFAULT NULL, cantidad DOUBLE PRECISION NOT NULL, precio_unitario DOUBLE PRECISION NOT NULL, precio_total DOUBLE PRECISION NOT NULL, descripcion VARCHAR(255) DEFAULT NULL, INDEX IDX_557EA41B3932A204 (id_articulo), INDEX IDX_557EA41B4DCC2375 (id_comprobante), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE admin_tipos_comprobante (id INT AUTO_INCREMENT NOT NULL, tipo VARCHAR(255) NOT NULL, activo TINYINT(1) NOT NULL, requiere_info_completa TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE finanzas_ctas_ctes (id INT AUTO_INCREMENT NOT NULL, id_titular INT DEFAULT NULL, tipo VARCHAR(1) NOT NULL, importe_facturas DOUBLE PRECISION NOT NULL, importe_pagos DOUBLE PRECISION NOT NULL, INDEX IDX_D911E11DA7BEB2B7 (id_titular), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE finanzas_metodo_pago_recibo (id INT AUTO_INCREMENT NOT NULL, id_recibo INT DEFAULT NULL, importe DOUBLE PRECISION NOT NULL, discr VARCHAR(255) NOT NULL, INDEX IDX_E865150B649E9D17 (id_recibo), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE finanzas_mov_ctas_ctes (id INT AUTO_INCREMENT NOT NULL, id_ctacte INT DEFAULT NULL, id_comprobante INT DEFAULT NULL, id_recibo INT DEFAULT NULL, importe DOUBLE PRECISION NOT NULL, activo TINYINT(1) NOT NULL, detalle VARCHAR(255) NOT NULL, fecha_alta DATETIME NOT NULL, discr VARCHAR(255) NOT NULL, INDEX IDX_23CF68E6AA47E38F (id_ctacte), INDEX IDX_23CF68E64DCC2375 (id_comprobante), INDEX IDX_23CF68E6649E9D17 (id_recibo), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE resp_iva (id INT AUTO_INCREMENT NOT NULL, nombre VARCHAR(255) NOT NULL, activo TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE rrhh_empleados (id INT AUTO_INCREMENT NOT NULL, id_puesto INT DEFAULT NULL, apellido VARCHAR(255) NOT NULL, nombre VARCHAR(255) NOT NULL, legajo INT NOT NULL, direccion VARCHAR(255) DEFAULT NULL, telefono VARCHAR(255) DEFAULT NULL, cuil INT DEFAULT NULL, dni INT DEFAULT NULL, fecha_ingreso DATETIME DEFAULT NULL, INDEX IDX_F4FF456C61F46733 (id_puesto), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE rrhh_puestos (id INT AUTO_INCREMENT NOT NULL, nombre VARCHAR(255) NOT NULL, activo TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE `system_user` (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(180) NOT NULL, apellido VARCHAR(180) DEFAULT NULL, nombre VARCHAR(180) DEFAULT NULL, roles JSON NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_IDENTIFIER_USERNAME (username), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE admin_comprobantes_transaccion ADD CONSTRAINT FK_A30E9E2A5824290E FOREIGN KEY (id_tpo_comp) REFERENCES admin_tipos_comprobante (id)');
        $this->addSql('ALTER TABLE admin_comprobantes_transaccion ADD CONSTRAINT FK_A30E9E2ACD9A166 FOREIGN KEY (id_letra) REFERENCES admin_identificacion_comprobante (id)');
        $this->addSql('ALTER TABLE admin_comprobantes_transaccion ADD CONSTRAINT FK_A30E9E2A557E7E9D FOREIGN KEY (id_ente_comercial) REFERENCES admin_entes_comerciales (id)');
        $this->addSql('ALTER TABLE admin_entes_comerciales ADD CONSTRAINT FK_8CF29E63E1DE3916 FOREIGN KEY (id_resp_iva) REFERENCES resp_iva (id)');
        $this->addSql('ALTER TABLE admin_items_comprobante ADD CONSTRAINT FK_557EA41B3932A204 FOREIGN KEY (id_articulo) REFERENCES admin_articulos_conceptos (id)');
        $this->addSql('ALTER TABLE admin_items_comprobante ADD CONSTRAINT FK_557EA41B4DCC2375 FOREIGN KEY (id_comprobante) REFERENCES admin_comprobantes_transaccion (id)');
        $this->addSql('ALTER TABLE finanzas_ctas_ctes ADD CONSTRAINT FK_D911E11DA7BEB2B7 FOREIGN KEY (id_titular) REFERENCES admin_entes_comerciales (id)');
        $this->addSql('ALTER TABLE finanzas_metodo_pago_recibo ADD CONSTRAINT FK_E865150B649E9D17 FOREIGN KEY (id_recibo) REFERENCES admin_comprobantes_transaccion (id)');
        $this->addSql('ALTER TABLE finanzas_mov_ctas_ctes ADD CONSTRAINT FK_23CF68E6AA47E38F FOREIGN KEY (id_ctacte) REFERENCES finanzas_ctas_ctes (id)');
        $this->addSql('ALTER TABLE finanzas_mov_ctas_ctes ADD CONSTRAINT FK_23CF68E64DCC2375 FOREIGN KEY (id_comprobante) REFERENCES admin_comprobantes_transaccion (id)');
        $this->addSql('ALTER TABLE finanzas_mov_ctas_ctes ADD CONSTRAINT FK_23CF68E6649E9D17 FOREIGN KEY (id_recibo) REFERENCES admin_comprobantes_transaccion (id)');
        $this->addSql('ALTER TABLE rrhh_empleados ADD CONSTRAINT FK_F4FF456C61F46733 FOREIGN KEY (id_puesto) REFERENCES rrhh_puestos (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE admin_comprobantes_transaccion DROP FOREIGN KEY FK_A30E9E2A5824290E');
        $this->addSql('ALTER TABLE admin_comprobantes_transaccion DROP FOREIGN KEY FK_A30E9E2ACD9A166');
        $this->addSql('ALTER TABLE admin_comprobantes_transaccion DROP FOREIGN KEY FK_A30E9E2A557E7E9D');
        $this->addSql('ALTER TABLE admin_entes_comerciales DROP FOREIGN KEY FK_8CF29E63E1DE3916');
        $this->addSql('ALTER TABLE admin_items_comprobante DROP FOREIGN KEY FK_557EA41B3932A204');
        $this->addSql('ALTER TABLE admin_items_comprobante DROP FOREIGN KEY FK_557EA41B4DCC2375');
        $this->addSql('ALTER TABLE finanzas_ctas_ctes DROP FOREIGN KEY FK_D911E11DA7BEB2B7');
        $this->addSql('ALTER TABLE finanzas_metodo_pago_recibo DROP FOREIGN KEY FK_E865150B649E9D17');
        $this->addSql('ALTER TABLE finanzas_mov_ctas_ctes DROP FOREIGN KEY FK_23CF68E6AA47E38F');
        $this->addSql('ALTER TABLE finanzas_mov_ctas_ctes DROP FOREIGN KEY FK_23CF68E64DCC2375');
        $this->addSql('ALTER TABLE finanzas_mov_ctas_ctes DROP FOREIGN KEY FK_23CF68E6649E9D17');
        $this->addSql('ALTER TABLE rrhh_empleados DROP FOREIGN KEY FK_F4FF456C61F46733');
        $this->addSql('DROP TABLE admin_articulos_conceptos');
        $this->addSql('DROP TABLE admin_comprobantes_transaccion');
        $this->addSql('DROP TABLE admin_entes_comerciales');
        $this->addSql('DROP TABLE admin_identificacion_comprobante');
        $this->addSql('DROP TABLE admin_items_comprobante');
        $this->addSql('DROP TABLE admin_tipos_comprobante');
        $this->addSql('DROP TABLE finanzas_ctas_ctes');
        $this->addSql('DROP TABLE finanzas_metodo_pago_recibo');
        $this->addSql('DROP TABLE finanzas_mov_ctas_ctes');
        $this->addSql('DROP TABLE resp_iva');
        $this->addSql('DROP TABLE rrhh_empleados');
        $this->addSql('DROP TABLE rrhh_puestos');
        $this->addSql('DROP TABLE `system_user`');
    }
}
