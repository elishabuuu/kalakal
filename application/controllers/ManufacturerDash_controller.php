<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ManufacturerDash_controller extends CI_Controller {

	public function index(){
		$this->load->view('template/header');
		$this->load->view('user_account/manufacturer/mdashboard_view.php');
		$this->load->view('template/footer');
	}
}
?>