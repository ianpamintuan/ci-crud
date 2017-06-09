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
    $this->form_validation->set_rules('name', 'Name', 'trim|required|min_length[3]');
    $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]');
    $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]');
    $this->form_validation->set_rules('confirmpassword', 'Confirm Password', 'trim|required|min_length[3]|matches[password]');

    if ($this->form_validation->run() == FALSE) {
      $this->load->view('templates/header');
      $this->load->view('users_add_view');
      $this->load->view('templates/footer');
    } else {

      if ($this->users_model->add_user()) {

        $this->session->set_flashdata('user_registered', 'User has been registered!');
        redirect('users/index');

      }

    }

    // $username = "abcd";
    // $password = "12345";
    // $name = "Unknown";
    // $this->users_model->add_user($username, $password, $name);
    // echo "User successfully added!";
  }

  public function edit($user_id)
  {

    $this->form_validation->set_rules('name', 'Name', 'trim|required|min_length[3]');
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
      if ($this->users_model->update_user()) {

        redirect('users/index');
      }

    }

    // $id = 3;
    // $username = "abcd_updated";
    // $password = "12345_updated";
    // $name = "Unknown_updated";
    // $this->users_model->update_user($id, $username, $password, $name);
    // echo "User successfully updated!";
  }

  public function delete($user_id)
  {

    $this->users_model->delete_user($user_id);

    $this->session->set_flashdata('user_deleted', 'User has been deleted.');

    redirect('users/index');

    // $id = 4;
    // $this->users_model->delete_user($id);
    // echo "User successfully deleted!";
  }

}

?>
