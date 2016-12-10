<?php
/**
 * Created by PhpStorm.
 * User: mzh
 * Date: 11/30/16
 * Time: 11:15 PM
 */
class Model {
  function __construct() {
    $this->db = new Database(DB_TYPE, DB_HOST, DB_NAME, DB_USER, DB_PASS);
  }
}