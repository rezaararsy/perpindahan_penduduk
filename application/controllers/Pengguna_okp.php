<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna_okp extends CI_Controller {
	function __construct()
	  {
	    parent::__construct();
	    $this->load->model('m_data');
	    $this->load->helper('url');
		$this->load->library('datatables');
	    if($this->session->userdata('status') != "login" || $this->session->userdata('role') != 104 ){
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
			'11' => $this->m_data->get_bulan_keluarpenggunakelurahan(2022,11,$kelurahan,$kecamatan)	
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
			'11' => $this->m_data->get_bulan_datangpenggunakelurahan(2022,11,$kelurahan,$kecamatan)
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
		$this->load->view('okp/data_pindah_kelurahan', $data);
	}
	public function data_json_perpindahan(){
		header('Content-Type: application/json');

        $kelurahan=$this->session->userdata('kelurahan');
        $kecamatan=$this->session->userdata('kecamatan');
		echo $this->m_data->getDataPerpindahan3($kecamatan,$kelurahan);
	}

    public function add_pindah_datang() {
		$data = array(
			'title' => "Dashboard"
		);
		$this->load->view('okp/add_data_perpindahan_datang', $data);
	}

	public function add_pindah_keluar() {
		$data = array(
			'title' => "Dashboard"
		);
		$this->load->view('okp/add_data_perpindahan_keluar', $data);
	}

    public function inputData()
	{
		$kecamatan = $this->input->post('kecamatan');
		$kelurahan = $this->input->post('kodekelurahan');
		$rw = $this->input->post('rw');
		$rt = $this->input->post('rt');
		$nik = 0;
		$nama = $this->input->post('nama');
		$jenis_pindah =1;
		$skpwni = $this->input->post('skpwni');
		$tgl_pindah = $this->input->post('tgl_pindah');
		$alamat_rt = $this->input->post('alamat_rt');
		$data = array(
		'kecamatan' => $kecamatan,
		'kelurahan' => $kelurahan,
		'rw' => $rw,
		'rt' => $rt,
		'nik' => $nik,
		'nama' => $nama,
		'jenis_pindah' => $jenis_pindah,
		'skpwni' => $skpwni,
		'tgl_pindah' => $tgl_pindah,
		'alamat_rt' => $alamat_rt
		);

		$this->m_data->input_data($data,'perpindahan');

		$this->session->set_flashdata('message', 'Anda berhasil menginput data');
		redirect(base_url("pengguna_okp"));
	}
	public function inputData1()
	{
		$kecamatan = $this->input->post('kecamatan');
		$kelurahan = $this->input->post('kodekelurahan');
		$rw = $this->input->post('rw');
		$rt = $this->input->post('rt');
		$nik = 0;
		$nama = $this->input->post('nama');
		$jenis_pindah = 2;
		$skpwni = $this->input->post('skpwni');
		$tgl_pindah = $this->input->post('tgl_pindah');
		$alamat_rt = $this->input->post('alamat_rt');
		$data = array(
		'kecamatan' => $kecamatan,
		'kelurahan' => $kelurahan,
		'rw' => $rw,
		'rt' => $rt,
		'nik' => $nik,
		'nama' => $nama,
		'jenis_pindah' => $jenis_pindah,
		'skpwni' => $skpwni,
		'tgl_pindah' => $tgl_pindah,
		'alamat_rt' => $alamat_rt
		);

		$this->m_data->input_data($data,'perpindahan');

		$this->session->set_flashdata('message', 'Anda berhasil menginput data');
		redirect(base_url("pengguna_okp"));
	}



}
