<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require 'bootstrap.php';


require Router::load('routes.php')
->direct(Request::uri());
//require $router->direct($uri);