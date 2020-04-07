<?php

Class Router
{
    


    public static function load($controllerName, $methodName)
  {

    require 'controller/'. $controllerName .'.php';
    $home = new $controllerName();
    $home->{$methodName}();

  }
}
