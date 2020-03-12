<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends MY_Controller {

 public function __construct()
 {
  parent::__construct();
  $this->load->model('test_model');

}

 function index(){
 	$data['template']='admin/test/index';
     $data['title']='Thêm Nhóm hàng';
      $data['catalog']="Thêm Nhóm hàng";
      $this->load->view('template_admin',$data);
 }
function page()
 {
 	

 }
 function add()
 {
  	
 		 $data['template']='admin/test/add';
     $data['title']='Thêm Nhóm hàng';
      $data['catalog']="Thêm Nhóm hàng";

      
      $this->form_validation->set_rules('name', 'Tên', 'required', array('required' =>'Bắt buộc tên'));
       $this->form_validation->set_rules('diachi', 'Địa chỉ', 'required', array('required' => 'Bắt buộc tên'));
      if ($this->form_validation->run()) {
        redirect('admin/home','refresh');
      } 
      
   $this->load->view('template_admin',$data); 
  	
    }

 
  function edit($id=1){
  

    }
   
    function delete($id){

      
      }
      function uploads(){
          $data = [];
   
      $count = count($_FILES['files']['name']);
    
      for($i=0;$i<$count;$i++){
    
        if(!empty($_FILES['files']['name'][$i])){
    
          $_FILES['file']['name'] = $_FILES['files']['name'][$i];
          $_FILES['file']['type'] = $_FILES['files']['type'][$i];
          $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
          $_FILES['file']['error'] = $_FILES['files']['error'][$i];
          $_FILES['file']['size'] = $_FILES['files']['size'][$i];
  
          $config['upload_path'] = 'uploads/'; 
          $config['allowed_types'] = 'jpg|jpeg|png|gif';
          $config['max_size'] = '5000';
          $config['file_name'] = $_FILES['files']['name'][$i];
   
          $this->load->library('upload',$config); 
    
          if($this->upload->do_upload('file')){
            $uploadData = $this->upload->data();
            $filename = $uploadData['file_name'];
   
            $data['totalFiles'][] = $filename;
          }
        }
   
      }
   
     // $this->load->view('imageUploadForm', $data);
      }
      function upload(){
         $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 100;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('file'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());

                }
      }
}

?>
