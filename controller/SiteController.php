<?php


class SiteController
{

  public function home()
  {
    require __DIR__ . '/../view/home.view.php';
  }

  public function about()
  {
    require __DIR__ . '/../view/about.view.php';
  }

}
