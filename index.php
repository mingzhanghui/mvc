<?php
require 'config.php';

// use an autoloader!
// Also spl_autoload_register (Take a look at it if you like)
function __autoload($class) {
  // require "libs/{$class}.php";
  require LIBS . $class . ".php";
}

$app = new Bootstrap();
