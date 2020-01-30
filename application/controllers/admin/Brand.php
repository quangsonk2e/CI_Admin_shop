<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Brand extends MY_Controller {

 public function __construct()
 {
  parent::__construct();
  $this->load->model('brand_model');
  $this->load->library('pagination');
  $this->config->load('configPaging');
  $this->load->helper('app');
 
  

 }

 function index()
 {
 	$config=$this->config->item('paging');
 	$config['base_url'] = base_url().'admin/brand/page';
  	$config['total_rows'] = $this->brand_model->countAll();;
  	      
 	$this->pagination->initialize($config);
 	
 	$data['links']=$this->pagination->create_links();
 	$data['title']='Nhóm hàng';
 	$data['template']='admin/brand/index';
 	$data['catalog']="Nhóm hàng";
 	$data['brands']=$this->brand_model->getByPage(1);
  	$this->load->view('template_admin',$data);
 }
function page($page=1)
 {
 	//$page=$this->security->xss_clean($data);
  
 	$page=(int)$page;
 	$config=$this->config->item('paging');
 	$config['base_url'] = base_url().'admin/brand/page';
  	$config['total_rows'] = $this->brand_model->countAll();
  	        
 	$this->pagination->initialize($config);

 	$data['links']=$this->pagination->create_links();
  $data['title']='Nhóm hàng';
 	$data['template']='admin/brand/index';
 	$data['catalog']="Nhóm hàng";
 	$data['brands']=$this->brand_model->getByPage($page);
 	//$data['total_rows']=$this->brand_model->getAll()->count_all_results();
  	$this->load->view('template_admin',$data);
   
 }
 function add()
 {
  	
 		  $data['template']='admin/brand/add';
      $data['title']='Thêm Nhóm hàng';
      $data['catalog']="Thêm Nhóm hàng";
      
      $this->load->view('template_admin',$data); 
     
       
    
  	
    }

   function add_valid()
 {
  
      // kiểm tra tính hợp lệ
      $this->form_validation->set_rules('b_name','Tên nhóm','required',array('required' => 'Bắt buộc nhập tên nhóm'));
      $this->form_validation->set_rules('b_date','Ngày tạo','required',array('required'=>'Bắt buộc nhập ngày tạo'));
      if($this->form_validation->run()){
      //Kết thúc kiểm tra tính hợp lệ
        $name=htmlentities($this->input->post('b_name',TRUE),ENT_QUOTES);
        $date=htmlentities($this->input->post('b_date',TRUE),ENT_QUOTES);
        $date=changedate($date);
      //  echo date('d/m/Y H:i:s',strtotime($date));
       $this->brand_model->add($name,$date);
        $this->session->set_flashdata('message', 'Thêm nhóm hàng thành công '.$name);
       
      
      redirect('admin/brand');
    
  }
  else{
    $this->add();
  }
  }

  function edit($id=1){
    //$id=htmlentities($id);
    $data['item']=$this->brand_model->getById($id);
    $data['title']='Sửa nhóm hàng';
    $data['template']='admin/brand/edit';
    $data['catalog']="Sửa nhóm hàng";
    
  //$data['total_rows']=$this->brand_model->getAll()->count_all_results();
    $this->load->view('template_admin',$data);



    }
    function edit_valid($id=1){
      echo $id;
       $this->form_validation->set_rules('b_name','Tên nhóm','required',array('required' => 'Bắt buộc nhập tên nhóm'));
      $this->form_validation->set_rules('b_date','Ngày tạo','required',array('required'=>'Bắt buộc nhập ngày tạo'));
      if($this->form_validation->run()){
      $name=htmlentities($this->input->post('b_name'));
      $date=htmlentities($this->input->post('b_date'));
      $date=changedate($date);
      $this->brand_model->update($id,$name,$date);
      $this->session->set_flashdata('message', 'Sửa thành công '.$name);
      redirect('admin/brand');
      }
      else
        $this->edit($id);

    }
    function delete($id){

      $this->brand_model->delete($id);
      $this->session->set_flashdata('message', 'Xoá thành công ');
      redirect('admin/brand');
      }

}

?>
