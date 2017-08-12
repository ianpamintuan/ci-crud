<?php

class Users extends CI_Controller {

  function __construct() {
    parent::__construct();
  }

  public function index() {

    $data['title'] = "Users Page";
    $data['results'] = $this->users_model->display_users();
    $this->load->view('templates/header');
    $this->load->view('users_view', $data);
    $this->load->view('templates/footer');

  }

  public function add() {

    $this->form_validation->set_rules('first_name', 'First Name', 'trim|required|min_length[3]');
    $this->form_validation->set_rules('last_name', 'Last Name', 'trim|required|min_length[3]');
    $this->form_validation->set_rules('email', 'Email', 'trim|required|min_length[3]');
    $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]');
    $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]');
    $this->form_validation->set_rules('confirmpassword', 'Confirm Password', 'trim|required|min_length[3]|matches[password]');

    if ($this->form_validation->run() == FALSE) {

      $this->load->view('templates/header');
      $this->load->view('users_add_view');
      $this->load->view('templates/footer');

    } else {

      if ($this->users_model->add_user()) {

        $this->session->set_flashdata('user_registered', 'User has been successfully registered!');
        redirect('users/index');

      }

    }

  }

  public function edit($user_id) {

    $this->form_validation->set_rules('first_name', 'First Name', 'trim|required|min_length[3]');
    $this->form_validation->set_rules('last_name', 'Last Name', 'trim|required|min_length[3]');
    $this->form_validation->set_rules('email', 'Email', 'trim|required|min_length[3]');
    $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]');
    $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]');
    $this->form_validation->set_rules('confirmpassword', 'Confirm Password', 'trim|required|min_length[3]|matches[password]');

    if(is_numeric($user_id)===FALSE || $user_id==0) {
      redirect('404');
    }

    if ($this->form_validation->run() == FALSE) {

      $data['user'] = $this->users_model->get_user($user_id);
      $this->load->view('templates/header');
      $this->load->view('users_edit_view', $data);
      $this->load->view('templates/footer');

    } else {

      if ($this->users_model->update_user($user_id)) {
        $this->session->set_flashdata('user_edited', 'User has been successfully edited!');
        redirect('users/index');
      }

    }

  }

  public function delete($user_id) {

    if(is_numeric($user_id)===FALSE || $user_id==0) {
      redirect('404');
    } else {

      $this->users_model->delete_user($user_id);
      $this->session->set_flashdata('user_deleted', 'User has been successfully deleted.');
      redirect('users/index');
      
    }

  }

  public function login() {

    $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]');
    $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]');

    if ($this->form_validation->run() == FALSE) {

      $data = array(
          'errors' => validation_errors()
      );

      $this->session->set_flashdata($data);
      redirect('home');


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
        redirect('home');

      }

    }

  }

}

?>
