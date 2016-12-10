<?php
/**
 * Created by PhpStorm.
 * User: mzh
 * Date: 12/2/16
 * Time: 9:57 PM
 */
class Login_Model extends Model {

  public function __construct() {
    parent::__construct();
  }

  public function run() {
    $sth = $this->db->prepare("SELECT `id`,`role` FROM user 
                   WHERE login = :login AND password = :password");
    $sth->execute(array(
      ':login'    => $_POST['login'],
      ':password' => Hash::create('sha256', $_POST['password'], HASH_PASSWORD_KEY)
    ));
    $data = $sth->fetch(PDO::FETCH_ASSOC);
    $count = $sth->rowCount();

    if ($count > 0) {
      // login
      Session::init();
      Session::set('loggedIn', true);
      Session::set('role', $data['role']);
      header('location: ../dashboard');
    } else {
      // show an error!
      header('location: ../login');
    }
  }
}
