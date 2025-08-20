<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250813233831 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE finanzas_movimiento_factura_recibo (id INT AUTO_INCREMENT NOT NULL, id_recibo INT DEFAULT NULL, id_comprobante INT DEFAULT NULL, importe DOUBLE PRECISION NOT NULL, INDEX IDX_C1B6905D649E9D17 (id_recibo), INDEX IDX_C1B6905D4DCC2375 (id_comprobante), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE finanzas_movimiento_factura_recibo ADD CONSTRAINT FK_C1B6905D649E9D17 FOREIGN KEY (id_recibo) REFERENCES admin_comprobantes_transaccion (id)');
        $this->addSql('ALTER TABLE finanzas_movimiento_factura_recibo ADD CONSTRAINT FK_C1B6905D4DCC2375 FOREIGN KEY (id_comprobante) REFERENCES admin_comprobantes_transaccion (id)');
        $this->addSql('ALTER TABLE admin_comprobantes_transaccion ADD monto_aplicado DOUBLE PRECISION DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE finanzas_movimiento_factura_recibo DROP FOREIGN KEY FK_C1B6905D649E9D17');
        $this->addSql('ALTER TABLE finanzas_movimiento_factura_recibo DROP FOREIGN KEY FK_C1B6905D4DCC2375');
        $this->addSql('DROP TABLE finanzas_movimiento_factura_recibo');
        $this->addSql('ALTER TABLE admin_comprobantes_transaccion DROP monto_aplicado');
    }
}
