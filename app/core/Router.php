<?php

namespace App\core;
/**
 * @author Amir Azizi <amir.azizi.dev@gmail.com>
 * 
 * Router class
 */
class Router
{
  /**
   * @var array
   */
  public $routes = [
    'GET' => [],
    'PUT' => [],
    'POST' => [],
    'DELETE' => [],
  ];
  /**
   * load
   *
   * @param string $fileName
   *
   * @return void
   */
  public static function load($fileName)
  {
    $router = new static();
    require $fileName;
    return $router;
  }

  /**
   * get
   *
   * @param string $uri
   * @param string $controller
   *
   * @return void
   */
  public function get($uri, $controller)
  {
    $this->routes['GET'][$uri] = $controller;
  }
  /**
   * put
   *
   * @param string $uri
   * @param string $controller
   *
   * @return void
   */
  public function put($uri, $controller)
  {
    $this->routes['PUT'][$uri] = $controller;
  }

  /**
   * post
   *
   * @param string $uri
   * @param string $controller
   *
   * @return void
   */
  public function post($uri, $controller)
  {
    $this->routes['POST'][$uri] = $controller;
  }

  /**
   * delete
   *
   * @param string $uri
   * @param string $controller
   *
   * @return void
   */
  public function delete($uri, $controller)
  {
    $this->routes['DELETE'][$uri] = $controller;
  }

  /**
   * direct 
   *
   * @param string $uri
   * @param string $requestType
   *
   * @return void
   */
  public function direct($uri, $requestType)
  {
    if (array_key_exists($uri, $this->routes[$requestType])) {
      $this->action(...explode('@', $this->routes[$requestType][$uri]));
    } else {
      die("404");
    }
  }

  /**
   * action
   *
   * @param string $controllerName
   * @param string $actionName
   *
   * @return void
   */
  public function action($controllerName, $actionName)
  {
    $con = "\App\controller\\" . $controllerName;
    //require __DIR__ . '/../app/controller/' . $controllerName . '.php';
    
    $home = new $con();
    $home->{$actionName}();

  }
}
