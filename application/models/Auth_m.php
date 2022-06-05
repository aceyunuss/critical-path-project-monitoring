<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Auth_m extends CI_Model
{
  function __construct()
  {
    parent::__construct();
  }

  public function createUser($input)
  {
    $this->db->insert("users", $input);
    return $this->db->affected_rows();
  }

  public function checkLogin($email, $password)
  {
    $this->db->where(['email' => $email, 'password' => $password]);
    return $this->db->get("users");
  }

  public function getUserByEmail($email)
  {
    $this->db->where(['email' => $email]);
    return $this->db->get("users");
  }

  public function getUserById($id)
  {
    $this->db->where(['id' => $id]);
    return $this->db->get("users");
  }

  public function getQuestion($id)
  {
    $this->db->where(['id' => $id]);
    return $this->db->get("adm_question");
  }

  public function changePassword($id, $password)
  {
    $this->db->set(['password' => $password]);
    $this->db->where(['id' => $id])->update('users');
  }
}
