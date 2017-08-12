<?php

class Home extends CI_Controller {

  function __construct() {
    parent::__construct();
  }

  public function index() {

    $this->load->view("templates/header");
    $this->load->view("login_view");
    $this->load->view("templates/footer");

  }

}

?>
