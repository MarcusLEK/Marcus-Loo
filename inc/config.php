<?php
// Set to a subdirectory (e.g. '/Marcus-Loo') if the site is not served from the document root.
$BASE = '';

// Cache-busting token for local assets.
$ASSET_VERSION = '3';

function base_url(string $path = ''): string
{
    global $BASE;
    return $BASE . $path;
}

function asset(string $path): string
{
    global $ASSET_VERSION;
    return base_url($path) . '?v=' . $ASSET_VERSION;
}

function e(?string $value): string
{
    return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
}
