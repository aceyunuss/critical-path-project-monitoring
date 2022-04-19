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
      $this->template('dashboard');
    } else {
      $this->session->sess_destroy();
      $data['title'] = "Project Monitoring";
      $this->load->view("v_login");
    }
  }

  public function login()
  {

    if (empty($this->input->post('username')) || empty($this->input->post('password'))) {
      $this->session->set_userdata('err_login_form', 'Username dan password harus diisi.');
      redirect('auth');
    } else {
      $user = $this->input->post('username');
      $pass = md5($this->input->post('password'));

      $user = $this->Auth_m->checkLogin($user, $pass)->row_array();

      if (empty($user)) {
        $this->session->set_userdata('login', 'Username dan password tidak cocok. Silahkan periksa kembali');
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

  public function createNewUser()
  {
    $post = $this->input->post();

    $birthdate_str = strtotime($post['birthdate']);
    $birthdate = date('Y-m-d', $birthdate_str);

    $ins = [
      'email'          => $post['email'],
      'fullname'      => $post['fullname'],
      'password'      => md5($post['password']),
      'type'          => $post['type'],
      'phone'          => $post['phone'],
      'address'        => $post['address'],
      'gender'        => $post['gender'],
      'birthdate'      => $birthdate,
      'question_id'    => $post['question'],
      'answer'        => $post['answer'],
      'created_date'  => date("Y-m-d H:i:s")
    ];

    $this->db->trans_begin();

    $this->Auth_m->createUser($ins);

    if ($this->db->trans_status() !== FALSE) {
      $this->db->trans_commit();
      $this->session->set_userdata('result', 'Sukses membuat akun');
    } else {
      $this->db->trans_rollback();
      $this->session->set_userdata('result', 'Gagal membuat akun');
    }

    redirect('auth');
  }

  public function forgot_pass()
  {
    $data['title'] = "Online Learning - Forgot Password";
    $this->load->view("components/header", $data);
    $this->load->view("v_forgot_password");
    $this->load->view("components/footer");
  }

  public function security_question()
  {
    $id = $this->session->userdata('question_id');
    if (empty($id)) {
      redirect('auth/forgot_pass');
    }
    $getQuestion = $this->Auth_m->getQuestion($id)->row_array();
    $data['title'] = "Online Learning - Forgot Password";
    $data['question'] = $getQuestion['question'];
    $this->load->view("components/header", $data);
    $this->load->view("v_security_question");
    $this->load->view("components/footer");
  }

  public function new_pass()
  {
    $question_id = $this->session->userdata('question_id');
    $right_answer = $this->session->userdata('right_answer');
    if (empty($question_id)) {
      redirect('auth/forgot_pass');
    }
    if (!empty($question_id) && empty($right_answer)) {
      redirect('auth/security_question');
    }
    $data['title'] = "Online Learning - New Password";
    $this->load->view("components/header", $data);
    $this->load->view("v_new_password");
    $this->load->view("components/footer");
  }

  public function checkAccount($type)
  {
    if ($type == 1) {
      $email = $this->input->post('email');
      $checkAccount = $this->Auth_m->getUserByEmail($email)->row_array();
      // print_r($checkAccount);
      // die();

      if (!empty($checkAccount)) {
        $question_id = $checkAccount['question_id'];
        $user_id = $checkAccount['id'];
        $this->session->set_userdata('question_id', $question_id);
        $this->session->set_userdata('user_id', $user_id);
        redirect('auth/security_question');
      }
    } elseif ($type == 2) {
      $id = $this->session->userdata('user_id');
      $getAnswer = $this->Auth_m->getUserById($id)->row_array();
      $answer = $this->input->post('answer');

      // echo $answer . " -- " . $getAnswer['answer'];
      // die();

      if ($getAnswer['answer'] == $answer) {
        $this->session->set_userdata('right_answer', 'true');
        redirect('auth/new_pass');
      }
    }
  }

  public function changePassword()
  {
    $user_id = $this->session->userdata('user_id');

    $post = $this->input->post();

    $password = md5($post['new_pass']);

    $this->db->trans_begin();

    $this->Auth_m->changePassword($user_id, $password);

    if ($this->db->trans_status() !== FALSE) {
      $this->db->trans_commit();
      redirect('auth');
    } else {
      $this->db->trans_rollback();
    }
  }
}
