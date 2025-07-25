<?php

declare(strict_types=1);

use App\Controllers\SiteController;
use Yiisoft\Router\Group;
use Yiisoft\Router\Route;

return [
    Group::create()
        ->routes(
            Route::get('/')->action([SiteController::class, 'index'])->name('home'),
        ),
];
