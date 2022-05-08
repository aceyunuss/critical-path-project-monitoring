<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_project extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }


  public function insert($data)
  {
    $this->db->insert("project", $data);

    return $this->db->affected_rows();
  }


  public function get($id = "")
  {
    if (!empty($id)) {
      $this->db->where("project_id", $id);
    }
    $this->db->order_by("project_id", "desc");
    return $this->db->get("v_project");
  }


  public function delete($id)
  {
    $this->db->where("project_id", $id)->delete("project");
    return $this->db->affected_rows();
  }


  public function update($id, $data)
  {
    $this->db->where("project_id", $id)->update("project", $data);
    return $this->db->affected_rows();
  }
}
