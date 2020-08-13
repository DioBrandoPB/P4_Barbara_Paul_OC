<?php

require dirname(__DIR__) . '/controller/Backend/bddID.php';
require dirname(__DIR__) . '/vendor/autoload.php';

session_start();
$router = new \App\model\Router();
$router->run();