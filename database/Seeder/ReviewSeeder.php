<?php

declare(strict_types=1);

namespace Database\Seeder;

use App\Cookies\Cookie;
use App\Cookies\Person;
use App\Cookies\Review;
use function Tempest\Database\query;
use function Tempest\map;

class ReviewSeeder implements Seeder
{
    public function run(): void
    {
        $reviews = [
            [
                'cookie' => 'Gluten-free Galore',
                'reviewer' => 'Jeffrey',
                'score' => 5,
            ],
            [
                'cookie' => 'Gluten-free Galore',
                'reviewer' => 'Gordon Ramsay',
                'score' => 5,
            ],
            [
                'cookie' => 'Gluten-free Galore',
                'reviewer' => 'Cookie Monster',
                'score' => 5,
            ],
            [
                'cookie' => 'Gluten-free Galore',
                'reviewer' => 'Gordon Ramsay',
                'score' => 2,
            ],
            [
                'cookie' => 'Special Space Salted Delight',
                'reviewer' => 'Gordon Ramsay',
                'score' => 3,
            ],
            [
                'cookie' => 'Special Space Salted Delight',
                'reviewer' => 'Cookie Monster',
                'score' => 5,
            ],
            [
                'cookie' => 'Light Caramel Craze',
                'reviewer' => 'Gordon Ramsay',
                'score' => 5,
            ],
            [
                'cookie' => 'Light Caramel Craze',
                'reviewer' => 'Darth Vader',
                'score' => 1,
            ],
        ];
        foreach ($reviews as $review) {
            $person = query(Person::class)
                ->select()
                ->whereField('name', $review['reviewer'])
                ->first()
                ->id;
            $cookie = query(Cookie::class)
                ->select()
                ->whereField('title', $review['cookie'])
                ->first()
                ->id;

            query(Review::class)
                ->insert([
                    'reviewer_id' => $person,
                    'cookie_id' => $cookie,
                    'score' => $review['score'],
                ])->execute();
        }

    }
}