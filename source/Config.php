<?php
if(getenv('mode') == 'development'){
  define("URL_BASE", "http://localhost/");
  // define("API", "http://localhost:3457/");
  define("API", "https://api.auditta.com.br/");

  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
} else {
  define("URL_BASE", "https://auditta.com.br/");
  define("API", "https://api.auditta.com.br/");
}
define("API_IMAGES", API . "static/images/");
define("mainTitle", "AUDITTA");

session_start();

// caso a variavel de sessao nao exista
if(
  isset($_SESSION['cart'])
  &&
  isset($_SESSION['cart-total']) 
  && 
  isset($_SESSION['cart-count'])
){
  // TODO
} else {
  $_SESSION['cart'] = array();
  $_SESSION['cart-total'] = "0.00";
  $_SESSION['cart-count'] = 0;
}