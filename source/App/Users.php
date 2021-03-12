<?php
namespace Source\App;

require __DIR__ . "/CommonFunctions.php";

class Users {

  // dashboard
  public function dashboard($data) {
    $categories       = loadCategories();
    require __DIR__ . "../../views/user-dashboard.php";
  }

  // cadastro
  public function sign_up($data) {
    require __DIR__ . "../../views/sign-up.php";
  }

  // login
  public function sign_in($data) {
    require __DIR__ . "../../views/sign-in.php";
  }

}