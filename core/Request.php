<?php

class Request
{
  public static function getUri()
  {
    return trim($_SERVER['REQUEST_URI'],'/');
  }

  public static function getClassAndMethod($routes)
  {
    return  explode('¯\_(๑❛ᴗ❛๑)_/¯' ,$routes[Request::getUri()]);
  } 
  
}
