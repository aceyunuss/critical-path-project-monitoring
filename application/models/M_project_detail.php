<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_project_detail extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }


  public function insert($data)
  {
    $this->db->insert_batch("project_detail", $data);

    return $this->db->affected_rows();
  }


  public function get($id = "", $project_id = "")
  {
    if (!empty($id)) {
      $this->db->where("detail_id", $id);
    }
    if (!empty($project_id)) {
      $this->db->where("project_id", $project_id);
    }
    return $this->db->get("v_project_detail");
  }


  public function delete($id)
  {
    $this->db->where("detail_id", $id)->delete("project_detail");
    return $this->db->affected_rows();
  }


  public function update($id, $data)
  {
    $this->db->where("detail_id", $id)->update("project_detail", $data);
    return $this->db->affected_rows();
  }
}
