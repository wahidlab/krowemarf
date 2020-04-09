<?php

require 'core/Bootstrap.php';

Router::load(__DIR__ . '/routes.php')->direct(Request::uri(), Request::method());
