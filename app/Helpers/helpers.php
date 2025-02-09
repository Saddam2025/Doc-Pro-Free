<?php


if (!function_exists('getUndrawIcon')) {
    function getUndrawIcon($key) {
        $base_url = 'https://undraw.co/api/illustrations/';
        $slug = config("icons.$key", null);
        return $slug ? $base_url . $slug . '.svg' : $base_url . 'undraw_404.svg'; // Fallback to 404 illustration
    }
}
