<?php

if (!function_exists('getYoutubeId')) {
    function getYoutubeId($url)
    {
        preg_match('/[\\?\\&]v=([^\\?\\&]+)/', $url, $matches);
        return $matches[1] ?? null;
    }
}