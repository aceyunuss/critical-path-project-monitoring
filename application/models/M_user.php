<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_user extends CI_Model
{
  function __construct()
  {
    parent::__construct();
  }

  public function insert($data)
  {
    $this->db->insert("users", $data);

    return $this->db->affected_rows();
  }

  public function get($id = "")
  {
    if (!empty($id)) {
      $this->db->where("user_id", $id);
    }
    return $this->db->get("users");
  }


  public function delete($id)
  {
    $this->db->where("user_id", $id)->delete("users");
    return $this->db->affected_rows();
  }

  public function update($id, $data)
  {
    $this->db->where("user_id", $id)->update("users", $data);
    return $this->db->affected_rows();
  }


  public function getRole($role)
  {
    $this->db->where('role', $role);
    return $this->get();
  }
}
