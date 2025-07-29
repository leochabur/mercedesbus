<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250726124444 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE finanzas_metodo_pago_recibo ADD id_banco INT DEFAULT NULL');
        $this->addSql('ALTER TABLE finanzas_metodo_pago_recibo ADD CONSTRAINT FK_E865150B995BA0E1 FOREIGN KEY (id_banco) REFERENCES finanzas_bancos (id)');
        $this->addSql('CREATE INDEX IDX_E865150B995BA0E1 ON finanzas_metodo_pago_recibo (id_banco)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE finanzas_metodo_pago_recibo DROP FOREIGN KEY FK_E865150B995BA0E1');
        $this->addSql('DROP INDEX IDX_E865150B995BA0E1 ON finanzas_metodo_pago_recibo');
        $this->addSql('ALTER TABLE finanzas_metodo_pago_recibo DROP id_banco');
    }
}
