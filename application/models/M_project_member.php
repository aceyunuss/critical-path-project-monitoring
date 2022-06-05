<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_project_member extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }


  public function insert($data)
  {
    $this->db->insert_batch("project_member", $data);

    return $this->db->affected_rows();
  }


  public function get($id = "", $project_id = "")
  {
    if (!empty($id)) {
      $this->db->where("member_id", $id);
    }
    if (!empty($project_id)) {
      $this->db->where("project_id", $project_id);
    }
    return $this->db->get("v_project_member");
  }


  public function delete($id)
  {
    $this->db->where("member_id", $id)->delete("project_member");
    return $this->db->affected_rows();
  }


  public function update($id, $data)
  {
    $this->db->where("member_id", $id)->update("project_member", $data);
    return $this->db->affected_rows();
  }


  public function memberOf()
  {
    $pid = [];
    $project = $this->db->distinct('project_id')
      ->where('user_id', $this->session->userdata('user_id'))
      ->get('project_member')
      ->result_array();
    if (!empty($project)) {
      foreach ($project as $key => $value) {
        $pid[] = $value['project_id'];
      }
    }
    return $pid;
  }
}
