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
    $this->db->where('status', 'B');
    $data['projectlist'] = $this->M_project->get()->result_array();
    $this->template("project/v_list", "Proyek", $data);
  }


  public function viewj($id)
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
    $this->template("masterproject/v_view_j", "Lihat Data Proyek", $data);
  }



  public function editj($id)
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
    $this->template("masterproject/v_edit_j", "Ubah Data Proyek", $data);
  }


  public function go_editj()
  {
    $post = $this->input->post();

    $this->db->trans_begin();

    foreach ($post['duration'] as $key => $value) {
      $this->M_project_detail->update($key, ['duration' => $value]);
    }

    if ($this->db->trans_status() !== FALSE) {
      $this->db->trans_commit();
      echo "<script>alert('Berhasil mengubah jadwal proyek'); location.href='" . site_url('project/editj/' . $post['project_id']) . "';</script>";
    } else {
      $this->db->trans_rollback();
      echo "<script>alert('Gagal mengubah jadwal proyek'); location.href='" . site_url('project/editj/' . $post['project_id']) . "';</script>";
    }
  }

  public function jadwal()
  {
    $this->db->where('status !=', 'B');
    $data['projectlist'] = $this->M_project->get()->result_array();
    $this->template("project/v_listj", "Jadwal Proyek", $data);
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


  public function laporanm()
  {

    switch ($this->session->userdata('role')) {
      case 'Murid':
        $st = 'P';
        break;
      case 'Manajer Proyek':
        $st = 'V';
        break;
      case 'Kepala Madrasah':
        $st = 'C';
        break;
      default:
        $st = 'X';
        break;
    }

    $this->db->where('status', $st);
    $data['projectlist'] = $this->M_project->get()->result_array();
    $this->template("project/v_lap_list", "Laporan Akhir Proyek", $data);
  }


  public function laporan()
  {

    switch ($this->session->userdata('role')) {
      case 'Murid':
        $st = 'P';
        break;
      case 'Manajer Proyek':
        $st = 'V';
        break;
      case 'Kepala Madrasah':
        $st = 'C';
        break;
      default:
        $st = 'X';
        break;
    }

    $this->db->where('status', $st);
    $data['projectlist'] = $this->M_project->get()->result_array();
    $this->template("project/v_lap_list", "Approve Laporan Akhir Proyek", $data);
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

    if (!empty($_FILES['fnl']['name'])) {
      $this->session->set_userdata("dir_upload", "project");
      $upload = $this->upld("fnl");
      $update['final_att'] = $upload;
    }

    if (isset($post['npm'])) {
      $update['npm'] = $post['npm'];
    }

    if (isset($post['nkp'])) {
      $update['nkp'] = $post['nkp'];
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
      $this->M_project->update($post['project_id'], $update);
    }

    if ($this->db->trans_status() !== FALSE) {
      $this->db->trans_commit();
      echo "<script>alert('Berhasil melaporkan proyek'); location.href='" . site_url('project/laporan') . "';</script>";
    } else {
      $this->db->trans_rollback();
      echo "<script>alert('Gagal melaporkan proyek'); location.href='" . site_url('project/lap_process/' . $post['project_id']) . "';</script>";
    }
  }


  public function lap_view($id)
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
    $this->template("project/v_lap_view", "Laporan Akhir Proyek", $data);
  }


  public function cetaklaporan()
  {

    $this->db->where('status', 'S');
    $data['projectlist'] = $this->M_project->get()->result_array();
    $this->template("project/v_cetak_lap", "Cetak Laporan Akhir", $data);
  }


  public function clap_view($id)
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
    $this->template("project/v_clap_view", "Cetak Laporan Akhir Proyek", $data);
  }


  public function story()
  {
    $this->db->where('status', 'S');
    $data['projectlist'] = $this->M_project->get()->result_array();
    $this->template("project/v_story", "Story Project", $data);
  }
}
