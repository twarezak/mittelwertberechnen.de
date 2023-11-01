<?php
declare(strict_types=1);

use Illuminate\Support\Str;

if (! function_exists('class_for_nav')) {
    function class_for_nav($link, $current): string {
        $class = '';
        if( $link === $current) {
            $class = 'font-bold';
        }

        return $class;
    }
}

if (! function_exists('canonical_url')) {
    function canonical_url(): string
    {
        $current = url()->current();
        if (Str::startsWith($current, 'https://www')) {
            return str_replace('https://www.', 'https://', $current);
        }
        if (Str::startsWith($current, 'http://www.')) {
            return str_replace('http://www.', 'https://', $current);
        }
        if (Str::startsWith($current, 'http://')) {
            return str_replace('http://', 'https://', $current);
        }

        return $current;
    }
}
