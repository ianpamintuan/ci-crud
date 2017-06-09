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

  // public function add_user($username, $password, $name) {
  //   $this->db->insert('users', [
  //     'username' => $username,
  //     'password' => $password,
  //     'name'     => $name
  //   ]);
  // }

  public function add_user() {

    $options = ['cost' => 12];

    $encripted_pass = password_hash($this->input->post('password'), PASSWORD_BCRYPT, $options);

    $data = array(
      'name'     => $this->input->post('name'),
      'username' => $this->input->post('username'),
      'password' => $encripted_pass
    );

    $insert_data = $this->db->insert('users', $data);

    return $insert_data;
  }

  public function update_user($id, $username, $password, $name) {
    $this->db->where(['id' => $id]);
    $this->db->update('users', [
      'username' => $username,
      'password' => $password,
      'name'     => $name
    ]);
  }

  public function delete_user($id) {
    $this->db->where(['id' => $id]);
    $this->db->delete('users');
  }

  public function count_users()
  {
    $query = $this->db->get('users');
    $count = $query->num_rows();
    return $count;
  }

}


?>
