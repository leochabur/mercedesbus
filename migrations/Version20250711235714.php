<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250711235714 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE admin_comprobantes_transaccion ADD id_empresa_grupo INT NOT NULL');
        $this->addSql('ALTER TABLE admin_comprobantes_transaccion ADD CONSTRAINT FK_A30E9E2AB6FD573F FOREIGN KEY (id_empresa_grupo) REFERENCES admin_entes_comerciales (id)');
        $this->addSql('CREATE INDEX IDX_A30E9E2AB6FD573F ON admin_comprobantes_transaccion (id_empresa_grupo)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE admin_comprobantes_transaccion DROP FOREIGN KEY FK_A30E9E2AB6FD573F');
        $this->addSql('DROP INDEX IDX_A30E9E2AB6FD573F ON admin_comprobantes_transaccion');
        $this->addSql('ALTER TABLE admin_comprobantes_transaccion DROP id_empresa_grupo');
    }
}
