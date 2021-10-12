<?php

namespace App;

use Illuminate\Support\Str;

class Helper
{
    public static function slug(string $title): string
    {
        return Str::slug($title, '-', 'ru');
    }
}
