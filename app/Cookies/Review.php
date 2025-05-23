<?php

declare(strict_types=1);

namespace App\Cookies;

use Tempest\Validation\Rules\Between;

final class Review
{
    #[Between(min: 1, max: 5)]
    public int $score;

    public Cookie $cookie;

    public Person $reviewer;
}