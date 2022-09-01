<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna extends CI_Controller {
	function __construct()
	  {
	    parent::__construct();
	    $this->load->model('m_data');
	    $this->load->helper('url');
		$this->load->library('datatables');
	    if($this->session->userdata('status') != "login" && $this->session->userdata('role') != 101 ){
		   redirect('');
		  }

	  }
      
	public function index() {
		
		$data = array(
			'title' => "Dashboard",
		);
		$data['masuk'] = $this->m_data->get_masuk();
		$data['keluar'] = $this->m_data->get_keluar();
		$this->load->view('pengguna/pengguna', $data);
	}


	public function data_pindah() {
		$data = array(
			'title' => "Dashboard"
		);
		$this->load->view('pengguna/data_pindah', $data);
	}
	public function data_json_perpindahan(){
		header('Content-Type: application/json');
		echo $this->m_data->getDataPerpindahan();
	}



}
