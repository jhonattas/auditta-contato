<?php
namespace Source\App;

require __DIR__ . "/CommonFunctions.php";

class Pages {

  var $categories, $products, $featuredImages = array();

  public function home($data) {
    // $categories       = loadCategories();
    // $page             = printPageEnd();
    // $pagination       = loadPagination();
		// $featured_images  = loadFeaturedImages();
		// $products         = loadProducts(0);

    // $first = 0;
    // $last = 5;
    require __DIR__ . "../../views/homepage.php";
  }

  public function contact($data){
    $categories       = loadCategories();
    require __DIR__ . "../../views/contact.php";
  }

  public function maintenance($data){
    require __DIR__ . "../../views/maintenance.php";
  }
}