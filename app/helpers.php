<?php


function formatBytes($size, $precision = 2)
{
    $base = log((float) $size, 1024);
    $suffixes = ['', 'K', 'M', 'G', 'T'];

    return round(pow(1024, $base - floor($base)), $precision) .' '. $suffixes[floor($base)];
}

function registerUrl(): string
{
    return spatieUrl();
}

function spatieUrl(string $url = 'https://spatie.be'): string
{
    return $url;
}
