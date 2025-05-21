<?php

declare(strict_types=1);

namespace App\Cookies;

use Tempest\Database\IsDatabaseModel;
use Tempest\Validation\Rules\Length;

final class Person
{
    use IsDatabaseModel;

    #[Length(min: 1)]
    public string $name;
}