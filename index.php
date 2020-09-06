<?php

$database = require 'core/bootstrap.php';

$router = new Router;

//var_dump($_SERVER['REQUEST_URI']);die;
//
require 'routes.php';

$uri = trim($_SERVER['REQUEST_URI'], '/');

require $router->direct($uri);