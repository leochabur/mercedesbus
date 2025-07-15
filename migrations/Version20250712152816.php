<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250712152816 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE finanzas_ctas_ctes ADD id_empresa_grupo INT DEFAULT NULL');
        $this->addSql('ALTER TABLE finanzas_ctas_ctes ADD CONSTRAINT FK_D911E11DB6FD573F FOREIGN KEY (id_empresa_grupo) REFERENCES admin_entes_comerciales (id)');
        $this->addSql('CREATE INDEX IDX_D911E11DB6FD573F ON finanzas_ctas_ctes (id_empresa_grupo)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE finanzas_ctas_ctes DROP FOREIGN KEY FK_D911E11DB6FD573F');
        $this->addSql('DROP INDEX IDX_D911E11DB6FD573F ON finanzas_ctas_ctes');
        $this->addSql('ALTER TABLE finanzas_ctas_ctes DROP id_empresa_grupo');
    }
}
