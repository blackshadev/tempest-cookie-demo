<?php

declare(strict_types=1);

namespace App\Cookies;

use Tempest\Validation\Rules\Length;

final class Person
{
    public string $id;

    #[Length(min: 1)]
    public string $name;
}