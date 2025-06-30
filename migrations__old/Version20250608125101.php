<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250608125101 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE admin_identificacion_comprobante (id INT AUTO_INCREMENT NOT NULL, letra VARCHAR(1) NOT NULL, activo TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE admin_comprobantes_transaccion ADD id_letra INT DEFAULT NULL');
        $this->addSql('ALTER TABLE admin_comprobantes_transaccion ADD CONSTRAINT FK_A30E9E2ACD9A166 FOREIGN KEY (id_letra) REFERENCES admin_identificacion_comprobante (id)');
        $this->addSql('CREATE INDEX IDX_A30E9E2ACD9A166 ON admin_comprobantes_transaccion (id_letra)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE admin_comprobantes_transaccion DROP FOREIGN KEY FK_A30E9E2ACD9A166');
        $this->addSql('DROP TABLE admin_identificacion_comprobante');
        $this->addSql('DROP INDEX IDX_A30E9E2ACD9A166 ON admin_comprobantes_transaccion');
        $this->addSql('ALTER TABLE admin_comprobantes_transaccion DROP id_letra');
    }
}
