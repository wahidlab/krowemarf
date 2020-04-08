<?php

class Request
{
  public static function uri(): string
  {
    return trim($_SERVER['REQUEST_URI'],'/');
  }

  public static function getClassAndMethod($routes)
  {
    return  explode('¯\_(๑❛ᴗ❛๑)_/¯' ,$routes[Request::uri()]);
  } 
  
  public static function method(): string
  {
    return  $_SERVER['REQUEST_METHOD'];
  }


}
