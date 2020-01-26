<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {
 public function __construct()
 {
  parent::__construct();
  $this->load->model('brand_model');
  $this->load->library('pagination');
  $this->config->load('configPaging');
 }

 function index()
 {
  $config=$this->config->item('paging');
  $config['base_url'] = base_url().'admin/brand/page';
  $config['total_rows'] = $this->brand_model->countAll();;
          
  $this->pagination->initialize($config);
  $data['links']=$this->pagination->create_links();
 	$data['title']='Chào bạn đến với giao diện admin';
 	$data['template']='admin/home/index';
  $data['catalog']="Nhóm hàng";
  $data['brands']=$this->brand_model->getByPage(1);
 
  $this->load->view('template_admin',$data);
   
 }
 function page($page=1)
 {
  $data['title']='Chào bạn đến với giao diện admin';
  $data['template']='admin/home/index';
  $data['catalog']="Nhóm hàng";
  $this->load->view('template_admin',$data);
   
 }

 function logout()
 {
  $data = $this->session->all_userdata();
  foreach($data as $row => $rows_value)
  {
   $this->session->unset_userdata($row);
  }
  redirect('admin/login');
 }
}

?>
