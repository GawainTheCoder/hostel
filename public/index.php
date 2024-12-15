<?php
error_reporting(E_ALL & ~E_DEPRECATED);

require_once __DIR__ . '/../src/blade_init.php';
require_once __DIR__ . '/../src/db.php';
require_once __DIR__ . '/../src/functions.php';

session_start();

// Fetch hostels from the database
$hostels = getAllHostels(); // ensure this function returns an array
echo $blade->render('index', ['hostels' => $hostels]);