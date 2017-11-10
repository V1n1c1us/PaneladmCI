<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('backend/template/header');
		$this->load->view('backend/template/aside');
		$this->load->view('backend/home');
		$this->load->view('backend/template/footer');

	}

}

/* End of file controllername.php */
/* Location: ./application/controllers/controllername.php */