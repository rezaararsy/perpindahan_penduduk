<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	function __construct()
	  {
	    parent::__construct();
	    $this->load->model('m_data');
	    $this->load->helper('url');
		$this->load->library('datatables');
	    if($this->session->userdata('status') != "login"){
		   redirect('');
		  }

	  }

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
	public function add_pindah() {
		$data = array(
			'title' => "Dashboard"
		);
		$this->load->view('dashboard/add_data_perpindahan', $data);
	}
	public function ubah_pindah() {

		$data = array(
			'title' => "Dashboard"
		);
		$this->load->view('dashboard/edit_data_perpindahan', $data);
	}
	public function data_pindah() {
		$data = array(
			'title' => "Dashboard"
		);
		$this->load->view('dashboard/data_pindah', $data);
	}

	public function data_json_perpindahan(){
		header('Content-Type: application/json');
		echo $this->m_data->getDataPerpindahan();
	}

	function deleteData(){ 
        $kode=$this->input->post('id_perpindahan');
        $this->db->where('id_perpindahan',$kode);
        $this->db->delete('perpindahan');
        $this->session->set_flashdata('message', 'Data Berhasil di Hapus');
		redirect(base_url("dashboard"));    
    }

	public function inputData()
	{
		$kecamatan = $this->input->post('kecamatan');
		$kelurahan = $this->input->post('kelurahan');
		$rw = $this->input->post('rw');
		$rt = $this->input->post('rt');
		$nik = $this->input->post('nik');
		$nama = $this->input->post('nama');
		$jenis_pindah = $this->input->post('jenis_pindah');
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
		redirect(base_url("dashboard"));
	}

	public function updateData()
	{	
		$id=$this->input->post('id_perpindahan');
		$kecamatan = $this->input->post('kecamatan');
		$kelurahan = $this->input->post('kelurahan');
		$rw = $this->input->post('rw');
		$rt = $this->input->post('rt');
		$nik = $this->input->post('nik');
		$nama = $this->input->post('nama');
		$jenis_pindah = $this->input->post('jenis_pindah');
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
		
		$this->db->where('id_perpindahan',$id);
        $this->db->update('perpindahan', $data);

		$this->session->set_flashdata('message', 'Berhasil mengupdate data');
		redirect(base_url("dashboard"));
	}

}
