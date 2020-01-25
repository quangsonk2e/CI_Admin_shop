<?php defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Model extends CI_Controller {
  $table='';
  $key='id';
  $where='';
  $order='';
  function creat($data=array()){
	$this->db->insert($table,$data);
	
}

 ?>

