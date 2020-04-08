<?php

require 'core/Bootstrap.php';

 $router = Router::load('routes.php')->direct(Request::uri(), Request::method());


