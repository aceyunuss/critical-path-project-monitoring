<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends Core_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model(['Auth_m']);
    $this->load->library('email');
  }

  public function index()
  {
    if ($this->session->userdata('status') == 'granted') {
      $this->load->model(['M_project', 'M_user']);

      $data['client'] = $this->M_project->get()->num_rows();

      $this->db->where('status', 'S');
      $data['done'] = $this->M_project->get()->num_rows();

      $data['team'] = $this->M_user->get()->num_rows();

      $data['service'] = 5;

      $this->db->where('status !=', 'B');
      $data['act'] = $this->M_project->get()->num_rows();
      $this->template('v_dashboard', "Beranda", $data);
    } else {
      $this->session->sess_destroy();
      $data['title'] = "Project Monitoring";
      $this->load->view("v_login");
    }
  }

  public function login()
  {

    if (empty($this->input->post('email')) || empty($this->input->post('password'))) {
      $this->session->set_userdata('err_login_form', 'Email dan password harus diisi.');
      redirect('auth');
    } else {
      $email = $this->input->post('email');
      $pass = md5($this->input->post('password'));

      $user = $this->Auth_m->checkLogin($email, $pass)->row_array();

      if (empty($user)) {
        $this->session->set_userdata('login', 'Email dan password tidak cocok. Silahkan periksa kembali');
        redirect('auth');
      }

      $us = [
        'user_id' => $user['user_id'],
        'name'    => $user['fullname'],
        'status'  => 'granted',
        'role'    => $user['role'],
        'pict'    => empty($user['pict']) ? "assets/ico/prof.png" : "uploads/user/" . $user['pict']
      ];

      $this->session->set_userdata($us);

      redirect('dashboard');
    }
  }


  public function logout()
  {
    $this->session->sess_destroy();
    redirect('auth');
  }
}
