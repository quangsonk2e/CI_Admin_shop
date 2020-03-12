<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

	public function __construct()
	{

		parent::__construct();
		if(!$this->session->userdata('id'))
		{
			redirect('admin/login');
		}
		$this->load->library('form_validation');
  		$this->load->library('encrypt');
	}

	

}

/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */