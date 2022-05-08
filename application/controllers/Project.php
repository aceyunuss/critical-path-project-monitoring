<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Project extends Core_Controller
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
    $data['projectlist'] = $this->M_project->get()->result_array();
    $this->template("project/v_list", "Penentuan Proyek", $data);
  }


  public function process($id)
  {
    $data['project'] = $this->M_project->get($id)->row_array();
    $data['member'] = $this->M_user->getRole("Murid")->result_array();
    $this->template("project/v_process", "Proses Penentuan Proyek", $data);
  }


  public function go_process()
  {
    $post = $this->input->post();
    $mb = $dt = [];

    foreach ($post['code'] as $k => $v) {
      $dt[] = [
        'project_id'  => $post['project_id'],
        'code'        => $post['code'][$k],
        'description' => $post['desc'][$k],
        'duration'    => $post['duration'][$k],
        'predecessor' => $post['pred'][$k],
        'percentage'  => 0
      ];
    }

    foreach ($post['member'] as $k => $v) {
      $mb[] = [
        'project_id'  => $post['project_id'],
        'user_id'     => $post['member'][$k],
      ];
    }

    $this->db->trans_begin();

    $this->M_project_detail->insert($dt);
    $this->M_project_member->insert($mb);

    if ($this->db->trans_status() !== FALSE) {
      $this->db->trans_commit();
      echo "<script>alert('Berhasil memproses proyek'); location.href='" . site_url('project') . "';</script>";
    } else {
      $this->db->trans_rollback();
      echo "<script>alert('Gagal memproses proyek'); location.href='" . site_url('project/process/' . $post['project_id']) . "';</script>";
    }
  }
}
