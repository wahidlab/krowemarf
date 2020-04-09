<?php

require 'core/Bootstrap.php';

$router = Router::load(__DIR__ . '/routes.php')->direct(Request::uri(), Request::method());
