<?php

/**
 * This file is part of the Brille24 tierprice plugin.
 *
 * (c) Brille24 GmbH
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 */

declare(strict_types=1);

namespace Brille24\SyliusTierPricePlugin\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230713120513 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Add original price to tier price';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('ALTER TABLE brille24_tierprice ADD original_price INT NOT NULL');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('ALTER TABLE brille24_tierprice DROP original_price');
    }
}
