<?php
/** controllers */
  $router->namespace("Source\App");

  $router->group(null);
  $router->get("/", "Pages:home");

  $router->group("contato");
  $router->get("/", "Pages:contact");

  $router->group("manutencao");
  $router->get("/", "Pages:maintenance");

  $router->group("equipamentos");
  $router->get("/", "Pages:home");
  $router->get("/{page_id}", "Products:page_id");

  $router->group("equipamento");
  $router->get("/{product_id}", "Products:details");

  $router->group("categoria");
  $router->get("/{subcategory_id}", "Products:subcategory");

  /** ERRORS */
  $router->group("ooops");
  $router->get("/{errcode}", "Pages:error");