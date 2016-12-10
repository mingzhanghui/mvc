<?php

class View {
  function __construct() {
//    echo "this is the view<br />";
  }
  public function render($name, $noInclude = false) {
    if ($noInclude == true) {
      require_once 'views/' . $name . '.php';
    } else {
      require 'views/header.php';
      require_once 'views/' . $name . '.php';
      require 'views/footer.php';
    }
  }
}