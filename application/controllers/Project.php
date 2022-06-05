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


  public function laporan()
  {

    switch ($this->session->userdata('role')) {
      case 'Murid':
        $st = 'P';
        break;
      case 'Pembimbing':
        $st = 'V';
        break;
      case 'Kepala Madrasah':
        $st = 'C';
        break;
      default:
        # code...
        break;
    }

    $this->db->where('status', $st);
    $this->db->where_not_in('status', ['B', 'D']);
    $data['projectlist'] = $this->M_project->get()->result_array();
    $this->template("project/v_lap_list", "Laporan Akhir Proyek", $data);
  }


  public function lap_process($id)
  {
    $data['project'] = $this->M_project->get($id)->row_array();
    $data['detail'] = $this->M_project_detail->get("", $id)->result_array();
    $data['member'] = $this->M_project_member->get("", $id)->result_array();
    $dat = [];
    if (!empty($data['detail'])) {
      foreach ($data['detail'] as $k => $v) {
        $start = empty($v['predecessor']) ? date("Y, n, d", strtotime($data['project']['start_date'])) : null;
        $dat[] = [
          $v['code'],
          $start,
          $v['duration'] * 24 * 60 * 60 * 1000,  ##y duration convert to milisecond
          (int)$v['percentage'],
          $v['predecessor'], ##y dependency
        ];
      }
    }

    $data['cpm'] = json_encode($dat);
    $this->template("project/v_lap_process", "Laporan Akhir Proyek", $data);
  }


  public function go_lap_process()
  {
    $post = $this->input->post();

    $update = [];

    if (!empty($_FILES['att']['name'])) {
      $this->session->set_userdata("dir_upload", "project");
      $upload = $this->upld("att");
      $update['final_att'] = $upload;
    } 

    $project = $this->M_project->get($post['project_id'])->row_array();

    switch ($project['status']) {
      case 'P':
        $update['status'] = 'V';
        break;
      case 'V':
        $update['status'] = 'C';
        break;
      case 'C':
        $update['status'] = 'S';
        break;
      default:
        break;
    }

    $this->db->trans_begin();

    if (!empty($update)) {
      $this->M_projec->update($update);
    }

    if ($this->db->trans_status() !== FALSE) {
      $this->db->trans_commit();
      echo "<script>alert('Berhasil memproses proyek'); location.href='" . site_url('project') . "';</script>";
    } else {
      $this->db->trans_rollback();
      echo "<script>alert('Gagal memproses proyek'); location.href='" . site_url('project/lap_process/' . $post['project_id']) . "';</script>";
    }
  }
}
