<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Progress extends Core_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model(['M_user', 'M_project', 'M_project_detail', 'M_project_member']);

    if ($this->session->userdata('status') != 'granted') {
      $this->session->sess_destroy();
      redirect('auth');
    }
  }


  public function index()
  {
    $this->db->where('updated_at', NULL);
    $data['projecdetail'] = $this->M_project_detail->get()->result_array();
    $this->template("progress/v_todolist", "Update Progres Proyek", $data);
  }


  public function update($id)
  {
    $data['projectdetail'] = $this->M_project_detail->get($id)->row_array();
    $this->template("progress/v_update", "Update Progres Proyek", $data);
  }


  public function view($id)
  {
    $data['projectdetail'] = $this->M_project_detail->get($id)->row_array();
    $this->template("progress/v_view", "Lihat Progres Proyek", $data);
  }


  public function go_update()
  {

    $post = $this->input->post();

    $dt = [
      'note'          => $post['note'],
      'updated_by'    => $this->session->userdata['name'],
      'updated_at'    => date('Y-m-d H:i:s'),
    ];

    if (!empty($_FILES['att']['name'])) {
      $this->session->set_userdata("dir_upload", "progress");
      $upload = $this->upld("att");
      $dt['progress_att'] = $upload;
    }

    $this->db->trans_begin();

    $this->M_project_detail->update($post['detail_id'], $dt);

    $detail = $this->M_project_detail->get("", $post['project_id'])->result_array();
    $project = $this->M_project->get($post['project_id'])->row_array();

    $p = 0;
    foreach ($detail as $k => $v) {
      if (!empty($v['updated_at'])) {
        $p++;
      }
    }

    $dp['progress'] = $p / count($detail) * 100;

    if ($project['status'] == "B") {
      $dp['status'] = "D";
    }

    $this->M_project->update($post['project_id'], $dp);

    if ($this->db->trans_status() !== FALSE) {
      $this->db->trans_commit();
      echo "<script>alert('Berhasil mengubah progres proyek'); location.href='" . site_url('progress') . "';</script>";
    } else {
      $this->db->trans_rollback();
      echo "<script>alert('Gagal mengubah progres proyek'); location.href='" . site_url('progress/progress' . $post['detail_id']) . "';</script>";
    }
  }
  
  
  public function progresslist()
  {
    $data['projecdetail'] = $this->M_project_detail->get()->result_array();
    $this->template("progress/v_list", "List Progres Proyek", $data);
  }

}