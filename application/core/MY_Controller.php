<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Core_Controller extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
  }


  public function template($view = "", $title = "", $data = [])
  {

    $dota['content'] = $view;
    $dota['title'] = $title;
    $dota['site_title'] = "Project Monitoring - " . $title;

    $pass = array_merge($dota, $data);

    $this->load->view('v_template', $pass);
  }

  public function upld($input)
  {
    $loc = $this->session->userdata("dir_upload");

    $loc = str_replace("_", "/", $loc);
    $root = str_replace("application", "", APPPATH);
    $dir = $root . "/uploads/" . $loc;
    $dir = str_replace(array("\\", "//"), "/", $dir);

    // print_r($dir);

    $temn = $_FILES[$input]['tmp_name'];

    if (!file_exists($dir)) {
      mkdir($dir, 0777, true);
    }

    $config['upload_path'] = $dir;
    $config['allowed_types'] = 'jpg|gif|png|doc|docx|xls|xlsx|ppt|pptx|pdf|jpeg|zip|rar|tgz|7zip|tar';
    $config['max_size']     = 10240;
    // $config['max_widht'] 	= 1000;
    // $config['max_height']  	= 1000;
    // $config['file_name'] 		= round(microtime(true)*1000);

    $this->upload->initialize($config);

    if (!$this->upload->do_upload($input)) {
      return $this->upload->display_errors('', '');
    }

    return $this->upload->data('file_name');
  }


  public function dwnld($folder = "", $file = "")
  {
    $pth = str_replace("system\\", "", BASEPATH) . "uploads/" . $folder . "/"  . $file;

    if (file_exists($pth)) {
      $this->load->helper('download');
      force_download($pth, NULL);
      exit;
    } else {
      echo "<script>alert(\"File tidak ditemukan.\"); window.history.go(-1);</script>";
    }
  }
}
