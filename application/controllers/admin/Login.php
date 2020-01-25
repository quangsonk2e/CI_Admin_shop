<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

 public function __construct()
 {
  parent::__construct();
  if($this->session->userdata('id'))
  {
   redirect('admin/home');
  }
  $this->load->library('form_validation');
  $this->load->library('encrypt');
  $this->load->model('login_model');
 }

 function index()
 {
  
  $this->load->view('admin/login/login');
 }

 function validation()
 {
  $this->form_validation->set_rules('username', 'User name', 'required|trim',array('required' =>'Tên đăng nhập là  yêu cầu bắt buộc!!!'  ));
  $this->form_validation->set_rules('password', 'Password', 'required', array('required' =>'Mật khẩu là bắt buộc'  ));
  if($this->form_validation->run())
  {
   $result = $this->login_model->can_login($this->input->post('username'), $this->input->post('password'));
   //$result="";
   if($result == '')
   {
    redirect('admin/home');
   }
   else
   {
    $this->session->set_flashdata('message',$result);
    redirect('admin/login');
   }
  }
  else
  {
   $this->index();
  }
 }
 
}

?>
