<?php

  /** funções comuns */
  /** to load components */

  function printPageEnd() {
    $link = $_SERVER['REQUEST_URI'];
    $link_array = explode('/',$link);
    return end($link_array);
  }

  // load categories 
  function loadCategories(){
    $categories = json_decode(loadJSONFromAPI(API . "categories"));
    return $categories->categories;
  }

  function loadFeaturedImages(){
    $featuredImages = json_decode(loadJSONFromAPI(API . 'featured_images'));
    return $featuredImages->featured_images;
  }

  function loadPagination(){
    return json_decode(loadJSONFromAPI(API . 'pagination'));
  }

  function loadProduct($productID){
    $product = json_decode(loadJSONFromAPI(API . 'product/' . $productID));
    return $product->product;
  }

  function loadProducts($pageNumber){
    $products = json_decode(loadJSONFromAPI(API . 'products/' . ($pageNumber)));
    return $products->products;
  }

  function loadProductsFeatured(){
    $products_json = json_decode(loadJSONFromAPI(API . 'products_featured'));
    return $products_json->products;
  }

  function loadProductsBySubcategory($subcategoryID){
    return json_decode(loadJSONFromAPI(API . 'products_sub/' . $subcategoryID));
  }

  // tenta carregar o conteudo do JSON, caso nao consiga, encaminha para uma tela de manutenção
  // pois a API da qual o layout depende, nao esta disponivel neste momento especifico.
  function loadJSONFromAPI($url){
    $content = @file_get_contents($url, true);
    
    if($content != false){
      return $content;
    } else {
      Redirect(URL_BASE . 'manutencao', false);
    }
  }

  function assets($data){
    var_dump($data);
  }

  function error($data){
    echo "<h1>Web Erro {$data["errcode"]}</h1>";
    var_dump($data);
  }

  function Redirect($url, $permanent = false) {
    if (headers_sent() === false) {
        header('Location: ' . $url, true, ($permanent === true) ? 301 : 302);
    }
    exit();
  }