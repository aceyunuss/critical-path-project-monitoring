<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Masterproject extends Core_Controller
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
    $this->template("masterproject/v_list", "Data Proyek", $data);
  }


  public function add()
  {
    $data['pembimbing'] = $this->M_user->getRole("Pembimbing")->result_array();
    $this->template("masterproject/v_add", "Tambah Data Proyek", $data);
  }


  public function go_add()
  {

    $post = $this->input->post();

    $dt = [
      'project_name'  => $post['name'],
      'instance'      => $post['instance'],
      'description'   => $post['description'],
      'created_by'    => $this->session->userdata['name'],
      'mentor_id'     => $post['mentor'],
      'start_date'    => $post['date'],
      'created_at'    => date('Y-m-d'),
      'status'        => 'B',
      'progress'      => 0,
    ];

    if (!empty($_FILES['att']['name'])) {
      $this->session->set_userdata("dir_upload", "project");
      $upload = $this->upld("att");
      $dt['attachment'] = $upload;
    }

    $this->db->trans_begin();

    $this->M_project->insert($dt);

    if ($this->db->trans_status() !== FALSE) {
      $this->db->trans_commit();
      echo "<script>alert('Berhasil menambah proyek'); location.href='" . site_url('masterproject') . "';</script>";
    } else {
      $this->db->trans_rollback();
      echo "<script>alert('Gagal menambah proyek'); location.href='" . site_url('masterproject/add') . "';</script>";
    }
  }


  public function delete($id)
  {

    $this->M_project->delete($id);

    if ($this->db->trans_status() !== FALSE) {
      $this->db->trans_commit();
      $st = "Berhasil";
    } else {
      $this->db->trans_rollback();
      $st = "Gagal";
    }

    echo "<script>alert('$st menghapus user'); location.href='" . site_url('user') . "';</script>";
  }


  public function view($id)
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
    $this->template("masterproject/v_view", "Lihat Data Proyek", $data);
  }


  public function edit($id)
  {
    $data['pembimbing'] = $this->M_user->getRole("Pembimbing")->result_array();
    $data['project'] = $this->M_project->get($id)->row_array();
    $this->template("masterproject/v_edit", "Ubah Data Proyek", $data);
  }


  public function go_edit()
  {
    $post = $this->input->post();

    $dt = [
      'project_name'  => $post['name'],
      'instance'      => $post['instance'],
      'description'   => $post['description'],
      'mentor_id'     => $post['mentor'],
      'start_date'    => $post['date'],
    ];

    if (!empty($_FILES['att']['name'])) {
      $this->session->set_userdata("dir_upload", "project");
      $upload = $this->upld("att");
      $dt['attachment'] = $upload;
    }

    $this->db->trans_begin();

    $this->M_project->update($post['project_id'], $dt);

    if ($this->db->trans_status() !== FALSE) {
      $this->db->trans_commit();
      echo "<script>alert('Berhasil mengubah proyek'); location.href='" . site_url('masterproject') . "';</script>";
    } else {
      $this->db->trans_rollback();
      echo "<script>alert('Gagal mengubah proyek'); location.href='" . site_url('masterproject/edit/' . $post['project_id']) . "';</script>";
    }
  }
}