<?php
session_start();

/*
 |--------------------------------------------------------------------------
 | Base Site URL
 |--------------------------------------------------------------------------
 */
const BASE_URL = 'http://localhost:8000/';

/*
 |--------------------------------------------------------------------------
 | Environment
 |--------------------------------------------------------------------------
 */
const ENVIRONMENT = 'development';

/*
 |--------------------------------------------------------------------------
 | With database
 |--------------------------------------------------------------------------
 */
const WITH_DATABASE = false;

/*
 |--------------------------------------------------------------------------
 | Autoload files
 |--------------------------------------------------------------------------
 */
require_once __DIR__ . '/controllers/Controller.php';
require_once __DIR__ . '/models/Model.php';

foreach (glob(__DIR__ . '/system/helpers/*.php') as $file) {
    require_once $file;
}

foreach (glob(__DIR__. '/system/classes/*.php') as $file) {
    require_once $file;
}

foreach (glob(__DIR__ . '/helpers/*.php') as $file) {
    require_once $file;
}

foreach (glob(__DIR__. '/controllers/*.php') as $file) {
    if (basename($file) !== 'Controller.php') {
        require_once $file;
    }
}

foreach (glob(__DIR__. '/models/*.php') as $file) {
    if (basename($file) !== 'Model.php') {
        require_once $file;
    }
}

/*
 |--------------------------------------------------------------------------
 | Language constant
 |--------------------------------------------------------------------------
 */
define('LANG', get_language());

/*
 |--------------------------------------------------------------------------
 | Routing
 |--------------------------------------------------------------------------
 */
$routeFound = router('', static function() {
    echo 'Willkommen zum KPO Framework!';
});

if (!$routeFound) {
    header("HTTP/1.0 404 Not Found");
    echo "404 Not Found";
    exit();
}