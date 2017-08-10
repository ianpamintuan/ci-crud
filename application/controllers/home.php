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

  public function login() {

    $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]');
    $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]');

    if ($this->form_validation->run() == FALSE) {

      $this->load->view("templates/header");
      $this->load->view("login_view");
      $this->load->view("templates/footer");

    } else {

      $username = $this->input->post('username');
      $password = $this->input->post('password');
 
      $user_id = $this->users_model->login($username, $password);

      if ($user_id) {

        $user_data = array(
          'user_id'  => $user_id,
          'username' => $username,
          'logged_in'=> true
        );

        $this->session->set_userdata($user_data);
        redirect('dashboard/index');

      } else {

        $this->session->set_flashdata('user_login', 'Incorrect username or password!');
        redirect('home/login');

      }

    }

  }



}


?>
