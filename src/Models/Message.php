<?php

declare(strict_types=1);

namespace App\Models;

class Message
{
    public function getGreeting(): string
    {
        return 'Hello, World!';
    }
}
