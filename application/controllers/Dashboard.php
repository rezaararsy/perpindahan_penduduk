<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index() {
		$data = array(
			'title' => "Dashboard"
		);
		$this->load->view('dashboard/dashboard', $data);
	}
	public function daftar_user() {
		$data = array(
			'title' => "Dashboard"
		);
		$this->load->view('dashboard/daftar_user', $data);
	}
	public function edit_user() {
		$data = array(
			'title' => "Dashboard"
		);
		$this->load->view('dashboard/edit_user', $data);
	}

}
