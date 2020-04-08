<?php

Class Router
{
    
  public $routes = [
    'GET' => [],
    'PUT' => [],
    'POST' => [],
    'DELETE' => [],
  ];

  public static function load($fileName)
  {
    $router = new static;
    require __DIR__ . '/../routes.php';

    return $router;
  }
  
  public function get($uri, $controller)
  {
    $this->routes['GET'][$uri] = $controller;
  }

  public function put($uri, $controller)
  {
    $this->routes['PUT'][$uri] = $controller;
  }
    
  public function post($uri, $controller)
  {
    $this->routes['POST'][$uri] = $controller;
  }
  
  public function delete($uri, $controller)
  {
    $this->routes['DELETE'][$uri] = $controller;
  }

  public function direct($uri, $method)
  {
         $action = explode('@',$this->routes[$method][$uri]); 

    require __DIR__ . '/../controller/'. $action[0] .'.php';
    $home = new $action[0]();
    $home->{$action[1]}();
  }

  // @todo we should make a solution for wrong URI
  // if(array_key_exists(Request::uri(), $routes))
  // {
  //   $route = Request::getClassAndMethod($routes);
  //   Router::load(...$route);
  // }else{
  //   echo "404";
  // }
}
