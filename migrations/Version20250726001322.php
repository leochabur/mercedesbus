<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250726001322 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE finanzas_metodo_pago_recibo ADD numero_cheque VARCHAR(255) DEFAULT NULL, ADD fecha_pago DATE DEFAULT NULL, ADD del_cliente TINYINT(1) DEFAULT NULL, ADD librador VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE finanzas_metodo_pago_recibo DROP numero_cheque, DROP fecha_pago, DROP del_cliente, DROP librador');
    }
}
