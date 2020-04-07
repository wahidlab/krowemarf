<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

require 'core/Request.php';
// require 'controller/SiteController.php';
//
// $siteController = new SiteController();
//
// Route::get('')

$routes = require 'routes.php';
if(array_key_exists(Request::getUri(), $routes))
{
  $route = Request::getClassAndMethod($routes);
   
  require 'core/Router.php';
  Router::load(...$route);

}else{
  echo "404";
}

