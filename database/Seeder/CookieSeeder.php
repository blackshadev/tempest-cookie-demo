<?php

declare(strict_types=1);

namespace Database\Seeder;

use App\Cookies\Cookie;
use App\Cookies\Person;
use function Tempest\Database\query;
use function Tempest\map;

class CookieSeeder implements Seeder
{
    public function run(): void
    {
        $cookies = [
            [
                'title' => 'Gluten-free Galore',
                'image' => 'https://cupcakejemma.com/cdn/shop/articles/F3281291-997A-4A9B-98A9-6CAD079A01C4_860x.jpg?v=1588780627',
                'cook' => 'Gordon Ramsay',
            ], [
                'title' => 'Special Space Salted Delight',
                'image' => 'https://www.modernhoney.com/wp-content/uploads/2020/02/Salted-Caramel-Cookies-3-scaled.jpg',
                'cook' => 'Cupcake Jemma',
            ], [
                'title' => 'Light Caramel Craze',
                'image' => 'https://thefoodcharlatan.com/wp-content/uploads/2024/09/Salted-Caramel-Cookies-Recipe-4.jpg',
                'cook' => 'Gordon Ramsay',
            ], [
                'title' => 'Hazelnut Havok',
                'image' => 'https://www.withlovekitty.com/wp-content/uploads/2024/05/Chocolate-Hazelnut-Cookies-1-4.jpg',
                'cook' => 'Gordon Ramsay',
            ], [
                'title' => 'Force Faced Favorite',
                'image' => 'https://freshflavorful.com/wp-content/uploads/2018/12/chewy-coconut-cookies-featured.jpg',
                'cook' => 'Yoda',
            ]
        ];
        foreach ($cookies as $cookie) {
            query(Cookie::class)
                ->insert([
                    'title' => $cookie['title'],
                    'image' => $cookie['image'],
                    'cook_id' => Person::find(name: $cookie['cook'])->first()->id,
                    'content' => '',
                ])
                ->execute();
        }

    }
}