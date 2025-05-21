<?php

declare(strict_types=1);

namespace Database\Seeder;

use Tempest\Container\Container;
use Tempest\Container\Initializer;
use Tempest\Container\Singleton;

final readonly class SeederInitializer implements Initializer
{
    #[Singleton(tag: 'seeders')]
    public function initialize(Container $container): array
    {
        return [
            $container->get(PersonSeeder::class),
            $container->get(CookieSeeder::class),
            $container->get(ReviewSeeder::class),
        ];
    }
}