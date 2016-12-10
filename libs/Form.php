<?php
/**
 * Created by PhpStorm.
 * User: mzh
 * Date: 12/9/16
 * Time: 11:24 AM
 */
class Form {

  private $_postData = array();

  public function __construct() {

  }

  /**
   * @param $field
   */
  public function post($field) {
    $this->_postData[$field] = $_POST[$field];
  }

  public function val() {
//if (strlen($_POST['login']) < 4) {
//
//}
  }
}


