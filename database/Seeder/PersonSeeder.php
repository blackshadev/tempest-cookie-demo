<?php

declare(strict_types=1);

namespace Database\Seeder;

use App\Cookies\Person;
use function Tempest\Database\query;
use function Tempest\map;

class PersonSeeder implements Seeder
{
    public function run(): void
    {
        $names = [
            'The user',
            'Gordon Ramsay',
            'Cupcake Jemma',
            'Jeffrey',
            'Neil Armstrong',
            'Darth Vader',
            'Yoda',
            'Cookie Monster'
        ];

        foreach ($names as $name) {
            query(Person::class)
                ->insert([
                    'name' => $name
                ])
                ->execute();
        }

    }
}