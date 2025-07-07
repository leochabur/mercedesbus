<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250705132302 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE finanzas_metodo_pago_recibo ADD id_ctacte_bco INT DEFAULT NULL');
        $this->addSql('ALTER TABLE finanzas_metodo_pago_recibo ADD CONSTRAINT FK_E865150B6F45E807 FOREIGN KEY (id_caja) REFERENCES finanzas_cajas (id)');
        $this->addSql('ALTER TABLE finanzas_metodo_pago_recibo ADD CONSTRAINT FK_E865150BFD01C0AB FOREIGN KEY (id_ctacte_bco) REFERENCES finanzas_ctas_ctes_banco (id)');
        $this->addSql('CREATE INDEX IDX_E865150BFD01C0AB ON finanzas_metodo_pago_recibo (id_ctacte_bco)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE finanzas_metodo_pago_recibo DROP FOREIGN KEY FK_E865150B6F45E807');
        $this->addSql('ALTER TABLE finanzas_metodo_pago_recibo DROP FOREIGN KEY FK_E865150BFD01C0AB');
        $this->addSql('DROP INDEX IDX_E865150BFD01C0AB ON finanzas_metodo_pago_recibo');
        $this->addSql('ALTER TABLE finanzas_metodo_pago_recibo DROP id_ctacte_bco');
    }
}
