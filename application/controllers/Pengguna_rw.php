<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna_rw extends CI_Controller {
	function __construct()
	  {
	    parent::__construct();
	    $this->load->model('m_data');
	    $this->load->helper('url');
		$this->load->library('datatables');
	    if($this->session->userdata('status') != "login" || $this->session->userdata('role') != 106 ){
		   redirect('');
		  }

	  }

	public function index() {
		
		$data = array(
			'title' => "Dashboard",
		);
        $rw=$this->session->userdata('rw');
        $kelurahan=$this->session->userdata('kelurahan');
        $kecamatan=$this->session->userdata('kecamatan');
		$data['masuk'] = $this->m_data->get_masuk1rw($rw,$kelurahan,$kecamatan);
		$data['keluar'] = $this->m_data->get_keluar1rw($rw,$kelurahan,$kecamatan);
		$data['pindahkeluar'] = array(
			'3' => $this->m_data->get_bulan_keluarpenggunarw(2022,3,$rw,$kelurahan,$kecamatan),
			'4' => $this->m_data->get_bulan_keluarpenggunarw(2022,4,$rw,$kelurahan,$kecamatan),
			'5' => $this->m_data->get_bulan_keluarpenggunarw(2022,5,$rw,$kelurahan,$kecamatan),
			'6' => $this->m_data->get_bulan_keluarpenggunarw(2022,6,$rw,$kelurahan,$kecamatan),
			'7' => $this->m_data->get_bulan_keluarpenggunarw(2022,7,$rw,$kelurahan,$kecamatan),
			'8' => $this->m_data->get_bulan_keluarpenggunarw(2022,8,$rw,$kelurahan,$kecamatan),
			'9' => $this->m_data->get_bulan_keluarpenggunarw(2022,9,$rw,$kelurahan,$kecamatan),
			'10' => $this->m_data->get_bulan_keluarpenggunarw(2022,10,$rw,$kelurahan,$kecamatan),
			'11' => $this->m_data->get_bulan_keluarpenggunarw(2022,11,$rw,$kelurahan,$kecamatan),
			'12' => $this->m_data->get_bulan_keluarpenggunarw(2022,12,$rw,$kelurahan,$kecamatan)	
		);
		$data['pindahdatang'] = array(
			'3' => $this->m_data->get_bulan_datangpenggunarw(2022,3,$rw,$kelurahan,$kecamatan),
			'4' => $this->m_data->get_bulan_datangpenggunarw(2022,4,$rw,$kelurahan,$kecamatan),
			'5' => $this->m_data->get_bulan_datangpenggunarw(2022,5,$rw,$kelurahan,$kecamatan),
			'6' => $this->m_data->get_bulan_datangpenggunarw(2022,6,$rw,$kelurahan,$kecamatan),
			'7' => $this->m_data->get_bulan_datangpenggunarw(2022,7,$rw,$kelurahan,$kecamatan),
			'8' => $this->m_data->get_bulan_datangpenggunarw(2022,8,$rw,$kelurahan,$kecamatan),
			'9' => $this->m_data->get_bulan_datangpenggunarw(2022,9,$rw,$kelurahan,$kecamatan),
			'10' => $this->m_data->get_bulan_datangpenggunarw(2022,10,$rw,$kelurahan,$kecamatan),
			'11' => $this->m_data->get_bulan_datangpenggunarw(2022,11,$rw,$kelurahan,$kecamatan),
			'12' => $this->m_data->get_bulan_datangpenggunarw(2022,12,$rw,$kelurahan,$kecamatan)
		);
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
		$this->load->view('pengguna/data_pindah_rw', $data);
	}
	public function data_json_perpindahan(){
		header('Content-Type: application/json');
        $rw=$this->session->userdata('rw');
        $kelurahan=$this->session->userdata('kelurahan');
        $kecamatan=$this->session->userdata('kecamatan');
		echo $this->m_data->getDataPerpindahan2rw($rw,$kelurahan,$kecamatan);
	}



}
