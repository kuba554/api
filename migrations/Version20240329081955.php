<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240329081955 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE product ADD COLUMN delivery_time VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__product AS SELECT id, taxes_id, product_id, sku, date_edit, ean, name, description, image, variants, attributes, type, producer_id, group_id, unit_id, gfx_id, options, stock, main_image, stock_active, stock_weight, price_wholesale, price_suggested, tax_id, stock_stock, translations, category_id, categories, page, extension FROM product');
        $this->addSql('DROP TABLE product');
        $this->addSql('CREATE TABLE product (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, taxes_id INTEGER DEFAULT NULL, product_id INTEGER DEFAULT NULL, sku VARCHAR(255) DEFAULT NULL, date_edit DATETIME DEFAULT NULL, ean VARCHAR(255) DEFAULT NULL, name VARCHAR(255) DEFAULT NULL, description CLOB DEFAULT NULL, image VARCHAR(255) DEFAULT NULL, variants VARCHAR(255) DEFAULT NULL, attributes VARCHAR(255) DEFAULT NULL, type INTEGER DEFAULT NULL, producer_id INTEGER DEFAULT NULL, group_id INTEGER DEFAULT NULL, unit_id INTEGER DEFAULT NULL, gfx_id INTEGER DEFAULT NULL, options CLOB DEFAULT NULL --(DC2Type:array)
        , stock CLOB DEFAULT NULL --(DC2Type:array)
        , main_image CLOB DEFAULT NULL --(DC2Type:array)
        , stock_active BOOLEAN DEFAULT NULL, stock_weight DOUBLE PRECISION DEFAULT NULL, price_wholesale DOUBLE PRECISION DEFAULT NULL, price_suggested DOUBLE PRECISION DEFAULT NULL, tax_id INTEGER DEFAULT NULL, stock_stock DOUBLE PRECISION DEFAULT NULL, translations CLOB DEFAULT NULL --(DC2Type:array)
        , category_id INTEGER DEFAULT NULL, categories CLOB DEFAULT NULL --(DC2Type:array)
        , page INTEGER DEFAULT NULL, extension VARCHAR(255) DEFAULT NULL, CONSTRAINT FK_D34A04AD36D06393 FOREIGN KEY (taxes_id) REFERENCES taxes (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('INSERT INTO product (id, taxes_id, product_id, sku, date_edit, ean, name, description, image, variants, attributes, type, producer_id, group_id, unit_id, gfx_id, options, stock, main_image, stock_active, stock_weight, price_wholesale, price_suggested, tax_id, stock_stock, translations, category_id, categories, page, extension) SELECT id, taxes_id, product_id, sku, date_edit, ean, name, description, image, variants, attributes, type, producer_id, group_id, unit_id, gfx_id, options, stock, main_image, stock_active, stock_weight, price_wholesale, price_suggested, tax_id, stock_stock, translations, category_id, categories, page, extension FROM __temp__product');
        $this->addSql('DROP TABLE __temp__product');
        $this->addSql('CREATE INDEX IDX_D34A04AD36D06393 ON product (taxes_id)');
    }
}
