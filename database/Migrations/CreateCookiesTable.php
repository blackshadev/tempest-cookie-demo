<?php

declare(strict_types=1);

namespace Database\Migrations;

use Tempest\Database\DatabaseMigration;
use Tempest\Database\QueryStatement;
use Tempest\Database\QueryStatements\CreateTableStatement;
use Tempest\Database\QueryStatements\DropTableStatement;

final readonly class CreateCookiesTable implements DatabaseMigration
{
    public string $name;

    public function __construct()
    {
        $this->name = '2025-05-06-01_create_cookies_table';
    }

    public function up(): QueryStatement
    {
        return new CreateTableStatement('cookies')
            ->primary()
            ->text('title')
            ->text('image')
            ->text('content')
            ->belongsTo('cookies.cook_id', 'people.id');
    }

    public function down(): QueryStatement
    {
        return new DropTableStatement('cookies');
    }
}