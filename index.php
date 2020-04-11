<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

// require 'core/Bootstrap.php';

require 'vendor/autoload.php';


use App\core\Request;
use App\core\Router;

$router = Router::load(__DIR__ . '/routes.php')->direct(Request::uri(), Request::method());