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
        $rt= $this->session->userdata('rt');
        $rw=$this->session->userdata('rw');
        $kelurahan=$this->session->userdata('kelurahan');
        $kecamatan=$this->session->userdata('kecamatan');
		$data['masuk'] = $this->m_data->get_masuk1($rt,$rw,$kelurahan,$kecamatan);
		$data['keluar'] = $this->m_data->get_keluar1($rt,$rw,$kelurahan,$kecamatan);
		$this->load->view('pengguna/pengguna', $data);
        // $datam = $this->m_data->get_masuk1($rt,$rw,$kelurahan,$kecamatan);
		// $datak = $this->m_data->get_keluar1($rt,$rw,$kelurahan,$kecamatan);
        // echo $datam;
        // echo $datak;
	}


	public function data_pindah() {
		$data = array(
			'title' => "Dashboard"
		);
		$this->load->view('pengguna/data_pindah', $data);
	}
	public function data_json_perpindahan(){
		header('Content-Type: application/json');
        $rt= $this->session->userdata('rt');
        $rw=$this->session->userdata('rw');
        $kelurahan=$this->session->userdata('kelurahan');
        $kecamatan=$this->session->userdata('kecamatan');
		echo $this->m_data->getDataPerpindahan2($rt,$rw,$kelurahan,$kecamatan);
	}



}
