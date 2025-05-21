<?php

declare(strict_types=1);

namespace Database\Migrations;

use Tempest\Database\DatabaseMigration;
use Tempest\Database\QueryStatement;
use Tempest\Database\QueryStatements\CreateTableStatement;
use Tempest\Database\QueryStatements\DropTableStatement;

final readonly class CreatePeopleTable implements DatabaseMigration
{
    public string $name;

    public function __construct()
    {
        $this->name = '2025-05-06-00_create_people_table';
    }

    public function up(): QueryStatement
    {
        return new CreateTableStatement('people')
            ->primary()
            ->text('name');
    }

    public function down(): QueryStatement
    {
        return new DropTableStatement('people');
    }
}