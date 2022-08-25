<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index() {
		$data = array(
			'title' => "Ecommerce Dashboard"
		);
		$this->load->view('dashboard/dashboard', $data);
	}

}
