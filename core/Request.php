<?php

/**
 * Request Class
 */
class Request
{
  /**
   * uri
   *
   * @return string
   */
  public static function uri(): string
  {
    return trim($_SERVER['REQUEST_URI'], '/');
  }

  /**
   * method
   *
   * @return string
   */
  public static function method(): string
  {
    return  $_SERVER['REQUEST_METHOD'];
  }
}
