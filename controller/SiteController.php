<?php

/**
 * SiteController
 */
class SiteController
{
  /**
   * home action
   *
   * @return void
   */
  public function home()
  {
    require __DIR__ . '/../view/home.view.php';
  }
  /**
   * about action
   *
   * @return void
   */
  public function about()
  {
    require __DIR__ . '/../view/about.view.php';
  }
}
