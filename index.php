<?php 

  require __DIR__ . "/vendor/autoload.php";

  use CoffeeCode\Router\Router;

  $router = new Router(URL_BASE);
  
  require __DIR__ . "/source/App/Routes.php";

  $router->dispatch();