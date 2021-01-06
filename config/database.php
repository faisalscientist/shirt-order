<?php

require dirname(__FILE__) . '/../vendor/autoload.php';
new Jevets\Kirby\Dotenv\Dotenv(dirname(__FILE__, 2), '.env');

return [
    'host' => $_ENV['DB_HOST'] ?? 'localhost',
    'port' => $_ENV['DB_PORT'] ?? '3306',
    'user' => $_ENV['DB_USER'],
    'password' => $_ENV['DB_PASSWORD'],
    'database' => $_ENV['DB_DATABASE'],
];
