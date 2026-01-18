<?php

require_once __DIR__ . '/../app/Controllers/Controller.php';
require_once __DIR__ . '/../app/Controllers/UserController.php';
require_once __DIR__ . '/../app/Controllers/AdminController.php';

use App\Controllers\UserController;
use App\Controllers\AdminController;

// Get URI
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// REMOVE project folder + /public
$basePath = '/qanounconnect/public';
$uri = str_replace($basePath, '', $uri);

// Normalize
$uri = rtrim($uri, '/') ?: '/';

$routes = [
    '/' => [UserController::class, 'home'],

    '/admin' => [AdminController::class, 'dashboard'],
    '/admin/avocats' => [AdminController::class, 'avocats'],
    '/admin/huissiers' => [AdminController::class, 'huissiers'],
];

if (array_key_exists($uri, $routes)) {
    [$controller, $method] = $routes[$uri];
    (new $controller)->$method();
} else {
    http_response_code(404);
    echo '<h1>404 - Page Not Found</h1>';
}
