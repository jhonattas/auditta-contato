<?php

namespace Source\App;

require __DIR__ . "/CommonFunctions.php";

class Products {
  
  // inicializacao de arrays
  var $categories, $products, $pagination, $featuredImages = array();

  public function index($data) {
    $page             = printPageEnd();
    $pagination       = loadPagination();
  	$categories       = loadCategories();
  	$featured_images  = loadFeaturedImages();
    $products         = loadProducts(0);

    $first = 0;
    $last = 5;

    require __DIR__ . "../../views/catalog.php";
  }

  public function page_id($data) {
    $page             = printPageEnd();
    $categories       = loadCategories();
    $featured_images  = loadFeaturedImages();
    $products         = loadProducts($page);

    $first = $data["page_id"];
    $last = $data["page_id"] + 5;

    require __DIR__ . "../../views/products-list.php";
  }

  public function subcategory($data) {
    $page             = printPageEnd();
    $pagination       = loadPagination();
		$categories       = loadCategories();
    $featured_images  = loadFeaturedImages();
    
    $productsSubcategory = loadProductsBySubcategory($data["subcategory_id"]);
    $products         = $productsSubcategory->products;
    require __DIR__ . "../../views/products-list-categories.php";
  }

  public function details($data) {
		$categories = loadCategories();
    $product    = loadProduct($data["product_id"]);
    require __DIR__ . "../../views/product-details.php";
  }
}