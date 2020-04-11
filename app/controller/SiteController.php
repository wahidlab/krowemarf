<?php

namespace App\controller;

/**
 * SiteController
 */
class SiteController
{
    const VIEW_PATH = __DIR__ . '/../../view/';

    /**
     * home action
     *
     * @return void
     */
    public function home()
    {
        require self::VIEW_PATH . 'home.view.php';
    }

    /**
     * about action
     *
     * @return void
     */
    public function about()
    {
        require self::VIEW_PATH . 'about.view.php';
    }
}
