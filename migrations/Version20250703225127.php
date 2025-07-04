<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250703225127 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE finanzas_bancos (id INT AUTO_INCREMENT NOT NULL, nombre VARCHAR(255) NOT NULL, activo TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE finanzas_ctas_ctes_banco (id INT AUTO_INCREMENT NOT NULL, id_banco INT DEFAULT NULL, numero VARCHAR(255) NOT NULL, libera_valores TINYINT(1) NOT NULL, INDEX IDX_3DE7CC22995BA0E1 (id_banco), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE finanzas_ctas_ctes_banco ADD CONSTRAINT FK_3DE7CC22995BA0E1 FOREIGN KEY (id_banco) REFERENCES finanzas_bancos (id)');
        $this->addSql('ALTER TABLE finanzas_metodo_pago_recibo DROP FOREIGN KEY FK_E865150B6F45E807');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE finanzas_ctas_ctes_banco DROP FOREIGN KEY FK_3DE7CC22995BA0E1');
        $this->addSql('DROP TABLE finanzas_bancos');
        $this->addSql('DROP TABLE finanzas_ctas_ctes_banco');
        $this->addSql('ALTER TABLE finanzas_metodo_pago_recibo ADD CONSTRAINT FK_E865150B6F45E807 FOREIGN KEY (id_caja) REFERENCES finanzas_cajas (id)');
    }
}
