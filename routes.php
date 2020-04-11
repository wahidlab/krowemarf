<?php

/** @var Core\Router $router */

$router->get('', 'SiteController@home');
$router->get('about', 'SiteController@about');