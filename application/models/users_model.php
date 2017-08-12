<?php

class Users_model extends CI_Model {

  function __construct() {
    parent::__construct();
  }

  public function display_users() {

    $query = $this->db->get('users');
    return $query->result();

  }

  public function get_user($user_id) {

    $this->db->where(['id' => $user_id]);
    $query = $this->db->get('users');
    return $query->row_array();

  }

  public function login($username, $password) {

      $hashFormat = "$2y$10";
      $salt = "thisismysaltonpassword";

      $password = crypt($password, $hashFormat . $salt);

      $this->db->where('username', $username);
      $this->db->where('password', $password);
      $query = $this->db->get('users');

      if($query->num_rows() == 1) {
        return $query->row(0)->id;
      } else {
        return false;
      }

  }

  public function add_user() {

    $hashFormat = "$2y$10";
    $salt = "thisismysaltonpassword";

    $pass = $this->input->post('password');
    $encripted_pass = crypt($pass, $hashFormat . $salt);

    $data = array(
      'first_name'  => $this->input->post('first_name'),
      'last_name'   => $this->input->post('last_name'),
      'email'       => $this->input->post('email'),
      'username'    => $this->input->post('username'),
      'password'    => $encripted_pass
    );

    $insert_data = $this->db->insert('users', $data);

    return $insert_data;

  }

  public function update_user($id) {

    $hashFormat = "$2y$10";
    $salt = "thisismysaltonpassword";

    $pass = $this->input->post('password');
    $encripted_pass = crypt($pass, $hashFormat . $salt);

    $data = array(
      'first_name'  => $this->input->post('first_name'),
      'last_name'   => $this->input->post('last_name'),
      'email'       => $this->input->post('email'),
      'username'    => $this->input->post('username'),
      'password'    => $encripted_pass
    );

    $this->db->where(['id' => $id]);
    $update_data = $this->db->update('users', $data);

    return $update_data;

  }

  public function delete_user($id) {

    $this->db->where(['id' => $id]);
    $this->db->delete('users');

  }

  public function count_users() {

    $query = $this->db->get('users');
    $count = $query->num_rows();
    return $count;

  }

}


?>
