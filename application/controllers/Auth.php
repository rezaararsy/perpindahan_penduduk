<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	function __construct()
	{
	    parent::__construct();
	    $this->load->model('m_data', 'Model');
	    $this->load->helper('url');
		$this->load->library('datatables');
		
	  }
	public function index() {
		if($this->session->userdata('status') == "login"){
			redirect('dashboard');
		   }
		$data = array(
			'title' => "Aplikasi Pelaporan Perpindahan Penduduk"
		);
		$this->load->view('auth/auth', $data);
	}	
    public function login() {
		$data = array(
			'title' => "Login"
		);
		$this->load->view('auth/auth', $data);
	}
	public function login_auth()
	{	
		// redirect(base_url("dashboard"));
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
			);
		$cek2 = $this->Model->cek_login("user",$where)->num_rows();
			if($cek2 > 0){
			$ambile = $this->Model->cek_login("user",$where);
			$data_session = array(
				'nama' => $ambile->row()->nama,
				'role' => $ambile->row()->role,
				'id_user' => $ambile->row()->id_user,
				'status' => "login"
				);
			$this->session->set_userdata($data_session);
			$role = $this->session->userdata('role');
			if ($role == 101) {
			 	redirect(base_url("dashboard"));
			 }				
			}else{
			$this->session->set_flashdata('message', 'Username atau Password Salah');
				redirect("auth/login");			
			}
	}
	function logout(){
		$this->session->sess_destroy();
  		redirect('');
	}
}
