<?php

class My_Error extends Controller {
  function __construct() {
    parent::__construct();
    echo 'This is an error!';
  }

  function index() {
    $this->view->msg = "This page doesn't exsit";
    $this->view->render("help/index");
  }
}