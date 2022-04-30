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
      $this->template('v_dashboard', "Dashboard");
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
        'role'    => $user['role']
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
