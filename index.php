<?php
require 'Core/Bootstrap.php';


use Core\Request;
use Core\Router;

$router = Router::load(__DIR__ . '/routes.php')->direct(Request::uri(), Request::method());