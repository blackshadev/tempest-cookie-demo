<?php

declare(strict_types=1);

namespace App\Cookies;

use Tempest\Database\Virtual;
use Tempest\Router\Bindable;
use Tempest\Validation\Rules\Length;
use function Tempest\Database\query;

final class Cookie implements Bindable
{
    public string $id;

    #[Length(min: 5, max: 200)]
    public string $title;

    public string $image;

    public string $content;

    public Person $cook;

    #[Virtual]
    public int $averageRating {
        get {
            $reviews = Review::find(cookie_id: $this->id)->all() ?? [];

            if (empty($reviews)) {
                return 0;
            }

            return (int)round(
                array_reduce(
                    $reviews,
                    static fn(int $carry, Review $review) => $carry + $review->score,
                    0
                ) / count($reviews)
            );
        }
    }

    public static function resolve(string $input): static
    {
        return query(self::class)
            ->select()
            ->with('cook')
            ->whereField('id', $input)
            ->first();
    }

}