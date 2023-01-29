<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna_kelurahan extends CI_Controller {
	function __construct()
	  {
	    parent::__construct();
	    $this->load->model('m_data');
	    $this->load->helper('url');
		$this->load->library('datatables');
	    if($this->session->userdata('status') != "login" || $this->session->userdata('role') != 103 ){
		   redirect('');
		  }

	  }

	public function index() {
		
		$data = array(
			'title' => "Dashboard",
		);
        // $rt= $this->session->userdata('rt');
        // $rw=$this->session->userdata('rw');
        $kelurahan=$this->session->userdata('kelurahan');
        $kecamatan=$this->session->userdata('kecamatan');
		$data['masuk'] = $this->m_data->get_masuk1kelurahan($kelurahan,$kecamatan);
		$data['keluar'] = $this->m_data->get_keluar1kelurahan($kelurahan,$kecamatan);
		$data['pindahkeluar'] = array(
			'3' => $this->m_data->get_bulan_keluarpenggunakelurahan(2022,3,$kelurahan,$kecamatan),
			'4' => $this->m_data->get_bulan_keluarpenggunakelurahan(2022,4,$kelurahan,$kecamatan),
			'5' => $this->m_data->get_bulan_keluarpenggunakelurahan(2022,5,$kelurahan,$kecamatan),
			'6' => $this->m_data->get_bulan_keluarpenggunakelurahan(2022,6,$kelurahan,$kecamatan),
			'7' => $this->m_data->get_bulan_keluarpenggunakelurahan(2022,7,$kelurahan,$kecamatan),
			'8' => $this->m_data->get_bulan_keluarpenggunakelurahan(2022,8,$kelurahan,$kecamatan),
			'9' => $this->m_data->get_bulan_keluarpenggunakelurahan(2022,9,$kelurahan,$kecamatan),
			'10' => $this->m_data->get_bulan_keluarpenggunakelurahan(2022,10,$kelurahan,$kecamatan),
			'11' => $this->m_data->get_bulan_keluarpenggunakelurahan(2022,11,$kelurahan,$kecamatan),
			'12' => $this->m_data->get_bulan_keluarpenggunakelurahan(2022,12,$kelurahan,$kecamatan)	
		);
		$data['pindahdatang'] = array(
			'3' => $this->m_data->get_bulan_datangpenggunakelurahan(2022,3,$kelurahan,$kecamatan),
			'4' => $this->m_data->get_bulan_datangpenggunakelurahan(2022,4,$kelurahan,$kecamatan),
			'5' => $this->m_data->get_bulan_datangpenggunakelurahan(2022,5,$kelurahan,$kecamatan),
			'6' => $this->m_data->get_bulan_datangpenggunakelurahan(2022,6,$kelurahan,$kecamatan),
			'7' => $this->m_data->get_bulan_datangpenggunakelurahan(2022,7,$kelurahan,$kecamatan),
			'8' => $this->m_data->get_bulan_datangpenggunakelurahan(2022,8,$kelurahan,$kecamatan),
			'9' => $this->m_data->get_bulan_datangpenggunakelurahan(2022,9,$kelurahan,$kecamatan),
			'10' => $this->m_data->get_bulan_datangpenggunakelurahan(2022,10,$kelurahan,$kecamatan),
			'11' => $this->m_data->get_bulan_datangpenggunakelurahan(2022,11,$kelurahan,$kecamatan),
			'12' => $this->m_data->get_bulan_datangpenggunakelurahan(2022,12,$kelurahan,$kecamatan)
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
		$this->load->view('pengguna/data_pindah_kelurahan', $data);
	}
	public function data_json_perpindahan(){
		header('Content-Type: application/json');

        $kelurahan=$this->session->userdata('kelurahan');
        $kecamatan=$this->session->userdata('kecamatan');
		echo $this->m_data->getDataPerpindahan3($kecamatan,$kelurahan);
	}



}
