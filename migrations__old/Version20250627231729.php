<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250627231729 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE finanzas_ctas_ctes (id INT AUTO_INCREMENT NOT NULL, id_titular INT DEFAULT NULL, tipo VARCHAR(1) NOT NULL, INDEX IDX_D911E11DA7BEB2B7 (id_titular), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE finanzas_mov_ctas_ctes (id INT AUTO_INCREMENT NOT NULL, id_ctacte INT DEFAULT NULL, id_comprobante INT DEFAULT NULL, id_recibo INT DEFAULT NULL, importe DOUBLE PRECISION NOT NULL, activo TINYINT(1) NOT NULL, detalle VARCHAR(255) NOT NULL, fecha_alta DATETIME NOT NULL, discr VARCHAR(255) NOT NULL, INDEX IDX_23CF68E6AA47E38F (id_ctacte), INDEX IDX_23CF68E64DCC2375 (id_comprobante), INDEX IDX_23CF68E6649E9D17 (id_recibo), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE recibo (id INT AUTO_INCREMENT NOT NULL, fecha DATE NOT NULL, importe DOUBLE PRECISION NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE finanzas_ctas_ctes ADD CONSTRAINT FK_D911E11DA7BEB2B7 FOREIGN KEY (id_titular) REFERENCES admin_entes_comerciales (id)');
        $this->addSql('ALTER TABLE finanzas_mov_ctas_ctes ADD CONSTRAINT FK_23CF68E6AA47E38F FOREIGN KEY (id_ctacte) REFERENCES finanzas_ctas_ctes (id)');
        $this->addSql('ALTER TABLE finanzas_mov_ctas_ctes ADD CONSTRAINT FK_23CF68E64DCC2375 FOREIGN KEY (id_comprobante) REFERENCES admin_comprobantes_transaccion (id)');
        $this->addSql('ALTER TABLE finanzas_mov_ctas_ctes ADD CONSTRAINT FK_23CF68E6649E9D17 FOREIGN KEY (id_recibo) REFERENCES recibo (id)');
        $this->addSql('ALTER TABLE admin_comprobantes_transaccion ADD afecta_cta_cte TINYINT(1) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE finanzas_ctas_ctes DROP FOREIGN KEY FK_D911E11DA7BEB2B7');
        $this->addSql('ALTER TABLE finanzas_mov_ctas_ctes DROP FOREIGN KEY FK_23CF68E6AA47E38F');
        $this->addSql('ALTER TABLE finanzas_mov_ctas_ctes DROP FOREIGN KEY FK_23CF68E64DCC2375');
        $this->addSql('ALTER TABLE finanzas_mov_ctas_ctes DROP FOREIGN KEY FK_23CF68E6649E9D17');
        $this->addSql('DROP TABLE finanzas_ctas_ctes');
        $this->addSql('DROP TABLE finanzas_mov_ctas_ctes');
        $this->addSql('DROP TABLE recibo');
        $this->addSql('ALTER TABLE admin_comprobantes_transaccion DROP afecta_cta_cte');
    }
}
