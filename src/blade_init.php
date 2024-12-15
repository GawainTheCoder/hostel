<?php
require_once __DIR__ . '/../vendor/autoload.php';

use duncan3dc\Laravel\BladeInstance;

$views = __DIR__ . '/../templates';
$cache = __DIR__ . '/../cache';

// Ensure the cache directory exists
if (!is_dir($cache)) {
    mkdir($cache, 0755, true);
}

// Instantiate a BladeInstance instead of using Blade::make
$blade = new BladeInstance($views, $cache);


