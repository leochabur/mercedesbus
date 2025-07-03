<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250701221212 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE admin_comprobantes_transaccion DROP letra, CHANGE precio_total_sin_iva precio_total_sin_iva DOUBLE PRECISION DEFAULT NULL, CHANGE precio_iva precio_iva DOUBLE PRECISION DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE admin_comprobantes_transaccion ADD letra VARCHAR(1) DEFAULT NULL, CHANGE precio_total_sin_iva precio_total_sin_iva DOUBLE PRECISION NOT NULL, CHANGE precio_iva precio_iva DOUBLE PRECISION NOT NULL');
    }
}
