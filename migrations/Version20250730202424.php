<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250730202424 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE finanzas_metodo_pago_recibo ADD ic_cheque_cartera INT DEFAULT NULL, ADD entregado TINYINT(1) DEFAULT NULL, ADD acreditado TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE finanzas_metodo_pago_recibo ADD CONSTRAINT FK_E865150BC7BE2F91 FOREIGN KEY (ic_cheque_cartera) REFERENCES finanzas_metodo_pago_recibo (id)');
        $this->addSql('CREATE INDEX IDX_E865150BC7BE2F91 ON finanzas_metodo_pago_recibo (ic_cheque_cartera)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE finanzas_metodo_pago_recibo DROP FOREIGN KEY FK_E865150BC7BE2F91');
        $this->addSql('DROP INDEX IDX_E865150BC7BE2F91 ON finanzas_metodo_pago_recibo');
        $this->addSql('ALTER TABLE finanzas_metodo_pago_recibo DROP ic_cheque_cartera, DROP entregado, DROP acreditado');
    }
}
