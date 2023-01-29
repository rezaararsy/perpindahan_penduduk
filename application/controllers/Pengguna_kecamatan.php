<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna_kecamatan extends CI_Controller {
	function __construct()
	  {
	    parent::__construct();
	    $this->load->model('m_data');
	    $this->load->helper('url');
		$this->load->library('datatables');
	    if($this->session->userdata('status') != "login" || $this->session->userdata('role') != 105 ){
		   redirect('');
		  }

	  }

	public function index() {
		
		$data = array(
			'title' => "Dashboard",
		);
        // $rt= $this->session->userdata('rt');
        // $rw=$this->session->userdata('rw');
        //$kelurahan=$this->session->userdata('kelurahan');
        $kecamatan=$this->session->userdata('kecamatan');
		$data['masuk'] = $this->m_data->get_masuk1kecamatan($kecamatan);
		$data['keluar'] = $this->m_data->get_keluar1kecamatan($kecamatan);
		$data['pindahkeluar'] = array(
			'3' => $this->m_data->get_bulan_keluarpenggunakecamatan(2022,3,$kecamatan),
			'4' => $this->m_data->get_bulan_keluarpenggunakecamatan(2022,4,$kecamatan),
			'5' => $this->m_data->get_bulan_keluarpenggunakecamatan(2022,5,$kecamatan),
			'6' => $this->m_data->get_bulan_keluarpenggunakecamatan(2022,6,$kecamatan),
			'7' => $this->m_data->get_bulan_keluarpenggunakecamatan(2022,7,$kecamatan),
			'8' => $this->m_data->get_bulan_keluarpenggunakecamatan(2022,8,$kecamatan),
			'9' => $this->m_data->get_bulan_keluarpenggunakecamatan(2022,9,$kecamatan),
			'10' => $this->m_data->get_bulan_keluarpenggunakecamatan(2022,10,$kecamatan),
			'11' => $this->m_data->get_bulan_keluarpenggunakecamatan(2022,11,$kecamatan),	
			'12' => $this->m_data->get_bulan_keluarpenggunakecamatan(2022,12,$kecamatan)
		);
		$data['pindahdatang'] = array(
			'3' => $this->m_data->get_bulan_datangpenggunakecamatan(2022,3,$kecamatan),
			'4' => $this->m_data->get_bulan_datangpenggunakecamatan(2022,4,$kecamatan),
			'5' => $this->m_data->get_bulan_datangpenggunakecamatan(2022,5,$kecamatan),
			'6' => $this->m_data->get_bulan_datangpenggunakecamatan(2022,6,$kecamatan),
			'7' => $this->m_data->get_bulan_datangpenggunakecamatan(2022,7,$kecamatan),
			'8' => $this->m_data->get_bulan_datangpenggunakecamatan(2022,8,$kecamatan),
			'9' => $this->m_data->get_bulan_datangpenggunakecamatan(2022,9,$kecamatan),
			'10' => $this->m_data->get_bulan_datangpenggunakecamatan(2022,10,$kecamatan),
			'11' => $this->m_data->get_bulan_datangpenggunakecamatan(2022,11,$kecamatan),
			'12' => $this->m_data->get_bulan_datangpenggunakecamatan(2022,12,$kecamatan)
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
		$this->load->view('pengguna/data_pindah_kecamatan', $data);
	}
	public function data_json_perpindahan(){
		header('Content-Type: application/json');

        $kecamatan=$this->session->userdata('kecamatan');
		echo $this->m_data->getDataPerpindahan4($kecamatan);
	}



}
