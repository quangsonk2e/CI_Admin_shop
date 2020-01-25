<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

 public function __construct()
 {
  parent::__construct();
  if(!$this->session->userdata('id'))
  {
   redirect('admin/login');
  }
  $this->load->library('form_validation');
  $this->load->library('encrypt');
  $this->load->model('product_model');
  $this->load->model('brand_model');
  $this->load->model('category_model');
  $this->load->library('pagination');
  $this->config->load('configPaging');
  $this->load->helper('app');
 
  

 }

 function index()
 {
 	$config=$this->config->item('paging');
 	$config['base_url'] = base_url().'admin/product/page';
  	$config['total_rows'] = $this->product_model->countAll();;
  	      
 	$this->pagination->initialize($config);
 	
 	$data['links']=$this->pagination->create_links();
 	$data['title']='Nhóm hàng';
 	$data['template']='admin/product/index';
 	$data['catalog']="Nhóm hàng";
 	$data['products']=$this->product_model->getByPage(1);
  	$this->load->view('template_admin',$data);
 }
function page($page=1)
 {
 	//$page=$this->security->xss_clean($data);
  
 	$page=(int)$page;
 	$config=$this->config->item('paging');
 	$config['base_url'] = base_url().'admin/product/page';
  	$config['total_rows'] = $this->product_model->countAll();
  	        
 	$this->pagination->initialize($config);

 	$data['links']=$this->pagination->create_links();
  $data['title']='Nhóm hàng';
 	$data['template']='admin/product/index';
 	$data['catalog']="Nhóm hàng";
 	$data['products']=$this->product_model->getByPage($page);
 	//$data['total_rows']=$this->brand_model->getAll()->count_all_results();
  	$this->load->view('template_admin',$data);
   
 }
 function add()
 {
  	
 		  $data['template']='admin/product/add';
      $data['title']='Thêm Nhóm hàng';
      $data['catalog']="Thêm Nhóm hàng";
      $data['brands']=$this->brand_model->getAll();
      $data['categories']=$this->category_model->getAll();
      $this->load->view('template_admin',$data); 
     
       
    
  	
    }

   function add_valid()
 {
   
     $title= htmlentities($this->input->post('title'));
     $brand=htmlentities($this->input->post('brand'));
      $categories=htmlentities($this->input->post('category'));
      $price=htmlentities($this->input->post('price'));
      $list_price=htmlentities($this->input->post('list_price'));
       $sizes=htmlentities($this->input->post('sizes'));
      $date=htmlentities($this->input->post('date'));
       $description=htmlentities($this->input->post('description'));
    
       $this->session->set_flashdata('message', 'Thêm sản phẩm hàng thành công '.$title);
    
      //upload ảnh
       $data="";
     // $data = array();
      // Count total files
      $countfiles = count($_FILES['images']['name']);
      // Looping all files
      for($i=0;$i<$countfiles;$i++){
       
        if(!empty($_FILES['images']['name'][$i])){
 
          // Define new $_FILES array - $_FILES['file']
          $_FILES['file1']['name'] = $_FILES['images']['name'][$i];
          $_FILES['file1']['type'] = $_FILES['images']['type'][$i];
          $_FILES['file1']['tmp_name'] = $_FILES['images']['tmp_name'][$i];
          $_FILES['file1']['error'] = $_FILES['images']['error'][$i];
          $_FILES['file1']['size'] = $_FILES['images']['size'][$i];

          // Set preference
          $config['upload_path'] = 'uploads/'; 
          $config['allowed_types'] = 'jpg|jpeg|png|gif';
        //  $config['max_size'] = '500000'; // max_size in kb
          $config['file_name'] = $_FILES['images']['name'][$i];
 
          //Load upload library
          $this->load->library('upload',$config); 
 
          // File upload
          if($this->upload->do_upload('file1')){
            // Get data about the file
            $uploadData = $this->upload->data();
            $filename = $uploadData['file_name'];
          // Initialize array
           $data.=$filename.';';
          }
        }
 
      }
      rtrim($data, ";");
      //kết thúc upload ảnh

    $this->product_model->add($title, $categories,$price,$list_price, $data,$brand, $description, 1,$sizes,1);
      
    //$this->index();
        echo site_url('admin/product');
  }
  function chuyen(){
    $this->index();
    }
  function edit($id=1){
    //$id=htmlentities($id);
    $data['item']=$this->product_model->getById($id);
    $data['title']='Sửa sản phẩm';
    $data['template']='admin/product/edit';
    $data['catalog']="Sửa sản phẩm";
    $data['brands']=$this->brand_model->getAll();
      $data['categories']=$this->category_model->getAll();
  //$data['total_rows']=$this->brand_model->getAll()->count_all_results();
    $this->load->view('template_admin',$data);



    }
    function edit_valid(){
      $id=htmlentities($this->input->post('id'));
       $title= htmlentities($this->input->post('title'));
     $brand=htmlentities($this->input->post('brand'));
      $categories=htmlentities($this->input->post('category'));
      $price=htmlentities($this->input->post('price'));
      $list_price=htmlentities($this->input->post('list_price'));
       $sizes=htmlentities($this->input->post('sizes'));
      $date=htmlentities($this->input->post('date'));
       $description=htmlentities($this->input->post('description'));
    
       $this->session->set_flashdata('message', 'Thêm sản phẩm hàng thành công '.$title);
    
      //upload ảnh
       $data="";
     // $data = array();
      // Count total files

      $countfiles = count($_FILES['images']['name']);
      if($countfiles>0){
      // Looping all files
      for($i=0;$i<$countfiles;$i++){
       
        if(!empty($_FILES['images']['name'][$i])){
 
          // Define new $_FILES array - $_FILES['file']
          $_FILES['file1']['name'] = $_FILES['images']['name'][$i];
          $_FILES['file1']['type'] = $_FILES['images']['type'][$i];
          $_FILES['file1']['tmp_name'] = $_FILES['images']['tmp_name'][$i];
          $_FILES['file1']['error'] = $_FILES['images']['error'][$i];
          $_FILES['file1']['size'] = $_FILES['images']['size'][$i];

          // Set preference
          $config['upload_path'] = 'uploads/'; 
          $config['allowed_types'] = 'jpg|jpeg|png|gif';
        //  $config['max_size'] = '500000'; // max_size in kb
          $config['file_name'] = $_FILES['images']['name'][$i];
 
          //Load upload library
          $this->load->library('upload',$config); 
 
          // File upload
          if($this->upload->do_upload('file1')){
            // Get data about the file
            $uploadData = $this->upload->data();
            $filename = $uploadData['file_name'];
          // Initialize array
           $data.=$filename.';';
          }
        }
 
      }
      }
      $data=rtrim($data, ";");
      //kết thúc upload ảnh
     // echo $data;
    $this->product_model->update($id, $title, $categories,$price,$list_price, $data,$brand, $description, 1,$sizes,1);
      
    //$this->index();
        echo site_url('admin/product');

    }
    function delete($id){

      $this->product_model->delete($id);
      $this->session->set_flashdata('message', 'Xoá thành công ');
      redirect('admin/product');
      }

}

?>
