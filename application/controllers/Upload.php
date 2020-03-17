<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends CI_Controller {

 public function __construct()
 {
  parent::__construct();

 }

 public function do_upload(){
  //  $this->load->model('BlogModel'); // the model that communicate with blog
 
    $config['upload_path'] = './uploads/';
    $config['allowed_types'] = 'gif|jpg|jpeg|png';
    $config['overwrite'] = FALSE;
    $this->load->library('upload');
 
 $reponse = array(
                'csrfName' => $this->security->get_csrf_token_name(),
                'csrfHash' => $this->security->get_csrf_hash()
                );
    $funcNum = $this->input->get('CKEditorFuncNum'); //$_GET['CKEditorFuncNum']
    $this->upload->initialize($config);
   
    if (!$this->upload->do_upload('upload')){ // upload the file, 'upload' is the name of the field from CKEditor
         // failed upload
        $message = "Upload failed on blog manager server.";
        $url = '';
     
    }else{ // success copy to wp server
        $upload_result = base_url() . 'uploads/'. $this->upload->data()['file_name'];
        $upload_name = $this->upload->data()['file_name'];
 //echo $upload_result;
        // after finished uploading, it will receive a URL
      //  $url = $this->BlogModel->UploadImage($blogID, $upload_result, $upload_name); 
        //$url=base_url().''
 
        $message = 'Upload success!';
        // echo json_decode($reponse);

    }
  //  echo "<script type='text/javascript'>window.parent.CKEDITOR.tools.callFunction($funcNum, '$url', '$message');</script>";
    echo "<script type='text/javascript'>window.parent.CKEDITOR.tools.callFunction($funcNum, '$upload_result', '$message');</script>";
  }
}

?>
