<?php
/**
 * Created by PhpStorm.
 * User: mzh
 * Date: 12/7/16
 * Time: 3:43 PM
 */
class User extends Controller {

  public function __construct() {
    parent::__construct();
    Session::init();
    $logged = Session::get('loggedIn');
    $role = Session::get('role');
    if ($logged == false || $role != 'owner') {
      Session::destroy();
      header('location: login');
      exit;
    }
    // echo Hash::create('sha256', 'test', HASH_PASSWORD_KEY);
  }

  public function index() {
    $this->view->userList = $this->model->userList();
    $this->view->render('user/index');
  }

  public function create() {
    $data = array();

    $data['login'] = $_POST['login'];
    $data['password'] = $_POST['password'];
    $data['role'] = $_POST['role'];

    // @TODO: Do your error checking!
    $this->model->create($data);
    header('location: '. URL . 'user');
  }

  public function edit($id) {
    // fetch individual user
    $this->view->user = $this->model->userSingleList($id);
    $this->view->render('user/edit');
  }

  public function editSave($id) {
    $data = array();
    $data['id'] = $id;
    $data['login'] = $_POST['login'];
    $data['password'] = $_POST['password'];
    $data['role'] = $_POST['role'];

    // @TODO: Do your error checking!
    $this->model->editSave($data);
    header('location: '. URL . 'user');
  }

  public function delete($id) {
    $this->model->delete($id);
    header('location: '. URL . 'user');
  }
}
