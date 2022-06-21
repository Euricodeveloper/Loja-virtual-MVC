<?php
namespace Controllers;

use \Core\Controller;

class LoginControler extends Controller {

  public function index() {
    $array = array();

    $this->loadView('login', $array);
  }
}