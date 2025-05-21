<?php

declare(strict_types=1);

namespace App\Cookies;

use Tempest\Router\Get;
use Tempest\View\View;
use function Tempest\Database\query;
use function Tempest\view;

final readonly class CookieController
{
    #[Get('/')]
    #[Get('/cookies')]
    public function list(): View
    {
        $allCookies = query(Cookie::class)
            ->select()
            ->with('cook')
            ->all();

        return view('list.view.php', cookies: $allCookies);
    }

    #[Get('/cookies/{cookie}')]
    public function view(Cookie $cookie): View
    {
        $reviews = query(Review::class)
            ->select()
            ->whereField('cookie_id', $cookie->id)
            ->all();

        return view('view.view.php', cookie: $cookie, reviews: $reviews);
    }
}