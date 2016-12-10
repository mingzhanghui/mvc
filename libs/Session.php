<?php
/**
 * Created by PhpStorm.
 * User: mzh
 * Date: 12/3/16
 * Time: 2:58 PM
 */

class Session {
  public static function init() {
    if (!isset($_SESSION)) {
      session_start();
    }
  }

  public static function set($key, $value) {
    $_SESSION[$key] = $value;
  }

  public static function get($key) {
    if (isset($_SESSION[$key])) {
      return $_SESSION[$key];  
    }
    return null;
  }

  public static function destroy() {
    // unset($_SESSION);
    session_destroy();
  }

}