<?php

namespace App\Helpers;

use Illuminate\Support\Str;

class TextHelper
{
    /**
     * Truncate the given text and append an ellipsis if it exceeds the specified length.
     *
     * @param string $text
     * @param int $limit
     * @return string
     */
    public static function limiText($text, $limit = 100)
    {
        return Str::limit($text, $limit, '...');
    }
}
