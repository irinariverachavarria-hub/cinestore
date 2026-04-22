<?php

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Modo mantenimiento
if (file_exists($maintenance = __DIR__.'/storage/framework/maintenance.php')) {
    require $maintenance;
}

// Autoloader — apunta a vendor en la raíz
require __DIR__.'/vendor/autoload.php';

// Bootstrap — apunta a bootstrap en la raíz
$app = require_once __DIR__.'/bootstrap/app.php';

$app->handleRequest(Request::capture());