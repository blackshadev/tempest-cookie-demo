<?php

declare(strict_types=1);

namespace Database\Migrations;

use Tempest\Database\DatabaseMigration;
use Tempest\Database\QueryStatement;
use Tempest\Database\QueryStatements\CreateTableStatement;
use Tempest\Database\QueryStatements\DropTableStatement;

final readonly class CreateReviewsTable implements DatabaseMigration
{
    public string $name;

    public function __construct()
    {
        $this->name = '2025-05-06-02_create_reviews_table';
    }

    public function up(): QueryStatement
    {
        return new CreateTableStatement('reviews')
            ->primary()
            ->integer('score', unsigned: true)
            ->belongsTo('reviews.reviewer_id', 'cookies.id')
            ->belongsTo('reviews.cookie_id', 'cookies.id');
    }

    public function down(): QueryStatement
    {
        return new DropTableStatement('recipes');
    }
}