<?php

class Dashboard extends CI_Controller {

  function __construct() {
    parent::__construct();
  }

  public function index() {
    $data['users_count'] = $this->users_model->count_users();
    $this->load->view('templates/header');
    $this->load->view('dashboard_view', $data);
    $this->load->view('templates/footer');
  }

}


?>
