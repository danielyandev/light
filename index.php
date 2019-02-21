<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

/**
 * Define base variables
 */
define('BASE_DIR', getcwd());

/**
 * Connect composer
 */
require BASE_DIR.'/vendor/autoload.php';


/**
 * Create app
 */
$app = require_once __DIR__ .'/bootstrap/app.php';

$request = new \Core\Http\Request();
$response = new \Core\Http\Response();

$app->handle($request, $response);
