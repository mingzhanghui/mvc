<?php
/**
 * Created by PhpStorm.
 * User: mzh
 * Date: 11/30/16
 * Time: 5:28 PM
 */
class Bootstrap {
  function __construct() {
    $url = isset($_GET['url']) ? $_GET['url'] : null;
    $url = rtrim($url, '/');
    $url = filter_var($url, FILTER_SANITIZE_URL);
    $url = explode('/', $url);

    if (empty($url[0])) {
      require 'controllers/index.php';
      $controller = new Index();
      $controller->index();
      return false;
    }

    $file = 'controllers/' . $url[0] . '.php';
    $controller = null;
    if (file_exists($file)) {
      require $file;
    } else {
      require_once "controllers/myerror.php";
      $controller = new My_Error();
      return false;
    }
    $controller = new $url[0];
    $controller->loadModel($url[0]);

    // calling methods
    if (isset($url[2])) {
      if (method_exists($controller, $url[1])) {
        $controller->{$url[1]}($url[2]);
      } else {
        echo "errrrr";
      }
      $controller->{$url[1]}($url[2]);
    } else {
      if (isset($url[1])) {
        $controller->{$url[1]}();
      } else {
        $controller->index();
      }
    }
  }
}