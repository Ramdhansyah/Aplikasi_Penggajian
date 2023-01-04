<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome1 extends CI_Controller {

	public function index()
	{ 
		$this->load->view('landing_page/header');
		$this->load->view('landing_page/index');
		$this->load->view('landing_page/footer');
	}

	
}

?>
