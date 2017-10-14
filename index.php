<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
$database = require 'bootstrap.php';


$router = new Router;

require 'routes.php';

require $router->direct(str_replace('/','', $_SERVER['REQUEST_URI']));