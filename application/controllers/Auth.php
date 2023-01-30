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
		if($this->session->userdata('status') == "login" && $this->session->userdata('role') != 102 && $this->session->userdata('role') != 104 && $this->session->userdata('role') != 103 && $this->session->userdata('role') != 101){
			redirect('dashboard');
		   }
		   if($this->session->userdata('status') == "login" && $this->session->userdata('role') == 104){
			redirect('pengguna_okp');
		   }
		   if($this->session->userdata('status') == "login" && $this->session->userdata('role') == 103){
			redirect('pengguna_kelurahan');
		   }
		   if($this->session->userdata('status') == "login" && $this->session->userdata('role') == 105){
			redirect('pengguna_kecamatan');
		   }
		   if($this->session->userdata('status') == "login" && $this->session->userdata('role') == 101){
			redirect('pengguna');
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
		//blimbng 1 klojen 2 lowokwaru 3 kedungkandang 4 kedungkandang 5
		//blimbing-arjosari-rw1-rt1 = 1100201001 = xzzzzyymmm
		//5100808005
		// password blimbing01011 = kecamatan-rt-rw
		// password sementara = malangkota1987
		// sukun = 4100504001
		// merjosari = 5100211009 RW 11 RT 9 5100211 RW 9

		// abbbbxxyyy

		// a : Kode Kecamatan
		// b : Kode Kelurahan
		// c : Kode RW 
		// d : Kode RT
		
		$blimbing = array("Arjosari", "Balearjosari", "Blimbing", "Bunulrejo", "Jodipan", "Kesatrian", "Pandanwangi", "Polehan", "Polowijen", "Purwantoro", "Purwodadi");
		$kodeblimbing = array(1002,1001,1005,1008,1011,1009,1006,1010,1003,1007,1004);
		$kedungkandang = array("Arjowinangun", "Bumiayu", "Buring", "Cemorokandang", "Kedungkandang", "Kotalama", "Lesanpuro", "Madyopuro", "Mergosono", "Sawojajar", "Tlogowaru", "Wonokoyo");
		$kodekedungkandang = array(1011,1003,1005,1010,1006,1001,1007,1009,1002,1008,1012,1004);
		$klojen = array("Bareng", "Gadingasri", "Kasin", "Kauman", "Kiduldalem", "Klojen", "Oro-Oro Dowo", "Penanggungan", "Rampal Celaket", "Samaan", "Sukoharjo");
		$kodeklojen = array(1009,1010,1006,1007,1004,1001,1008,1011,1002,1003,1005);
		$lowokwaru = array("Dinoyo", "Jatimulyo", "Ketawanggede", "Lowokwaru", "Merjosari", "Mojolangu", "Sumbersari", "Tasikmadu", "Tlogomas", "Tulusrejo", "Tunggulwulung", "Tunjungsekar");
		$kodelowokwaru = array(1004,1007,1006,1011,1002,1009,1005,1012,1003,1010,1001,1008);
		$sukun = array("Bakalankrajan", "Bandulan", "Bandungrejosari", "Ciptomulyo", "Gadang", "Karangbesuki", "Kebonsari", "Mulyorejo", "Pisangcandi", "Sukun", "Tanjungrejo");
		$kodesukun = array(1011,1008,1004,1001,1002,1009,1003,1010,1007,1005,1006);

		$rtblimbing = array(34, 45, 55, 147, 85, 70, 137, 74, 38, 157, 95);
		$rwblimbing = array(5, 7, 10, 21, 8, 12, 14, 7, 6, 24, 13);

		$rtkedungkandang = array(64, 57, 47, 63, 48, 141, 94, 133, 77, 120, 37, 27);
		$rwkedungkandang = array(10, 6, 9, 11, 7, 11, 11, 17, 6, 16, 8, 5);

		$rtklojen = array(78, 50, 96, 67, 49, 47, 97, 45, 35, 58, 57);
		$rwklojen = array(9, 6, 11, 10, 8, 7, 10, 8, 6, 8, 7);

		$rtlowokwaru = array(51, 80, 32, 104, 86, 117, 40, 33, 49, 75, 59, 73);
		$rwlowokwaru = array(7, 11, 5, 15, 12, 19, 7, 6, 9, 16, 6, 8);

		$rtsukun = array(49, 67, 129, 62, 72, 83, 46, 60, 87, 113, 138);
		$rwsukun = array(7, 8, 13, 5, 9, 9, 5, 7, 11, 9, 13);
		//RW POLEHAN 9

		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$kecamatanya = (int) substr($username,0,1);
		$kelurahanya = (int) substr($username,1,4);
		$rwnya = (int) substr($username,5,2);
		$rtnya = (int) substr($username,7,3);


		$user_kecamatan = "";
		
		// if($kecamatanya == 1){
		// 	$user_kecamatan = "Blimbing";
		// 	$nama_user =  "$user_kecamatan $blimbing[$kelurahanya] RW $rwnya RT $rtnya";
		// }elseif($kecamatanya == 2){
		// 	$user_kecamatan = "Klojen";
		// 	$nama_user =  "$user_kecamatan $klojen[$kelurahanya] RW $rwnya RT $rtnya";
		// }elseif($kecamatanya == 5){
		// 	$user_kecamatan = "Lowokwaru";
		// 	// $nama_user =  " RW $rwnya RT $rtnya";
		// 	$nama_user =  "$user_kecamatan $lowokwaru[$kelurahanya] RW $rwnya RT $rtnya";
		// }elseif($kecamatanya == 3){
		// 	$user_kecamatan = "Kedungkandang";
		// 	$nama_user =  "$user_kecamatan $kedungkandang[$kelurahanya] RW $rwnya RT $rtnya";
		// }elseif($kecamatanya == 4){
		// 	$user_kecamatan = "Sukun";
		// 	$nama_user =  "$user_kecamatan $sukun[$kelurahanya] RW $rwnya RT $rtnya";
		// }

		if($rtnya==0||$data_sessionrtnya==null){
			if($kecamatanya == 1){
				$user_kecamatan = "Blimbing";
				$nama_user =  "RW $rwnya";
			}elseif($kecamatanya == 2){
				$user_kecamatan = "Klojen";
				$nama_user =  "RW $rwnya";
			}elseif($kecamatanya == 5){
				$user_kecamatan = "Lowokwaru";
				// $nama_user =  " RW $rwnya RT $rtnya";
				$nama_user =  "RW $rwnya";
			}elseif($kecamatanya == 3){
				$user_kecamatan = "Kedungkandang";
				$nama_user =  "RW $rwnya";
			}elseif($kecamatanya == 4){
				$user_kecamatan = "Sukun";
				$nama_user =  "RW $rwnya ";
			}
	
		}else{
			if($kecamatanya == 1){
				$user_kecamatan = "Blimbing";
				$nama_user =  "RW $rwnya RT $rtnya";
			}elseif($kecamatanya == 2){
				$user_kecamatan = "Klojen";
				$nama_user =  "RW $rwnya RT $rtnya";
			}elseif($kecamatanya == 5){
				$user_kecamatan = "Lowokwaru";
				// $nama_user =  " RW $rwnya RT $rtnya";
				$nama_user =  "RW $rwnya RT $rtnya";
			}elseif($kecamatanya == 3){
				$user_kecamatan = "Kedungkandang";
				$nama_user =  "RW $rwnya RT $rtnya";
			}elseif($kecamatanya == 4){
				$user_kecamatan = "Sukun";
				$nama_user =  "RW $rwnya RT $rtnya";
			}
	
		}
		
		

		// echo $kecamatanya;
		// echo "<br>";
		// echo $kelurahanya;
		// echo "<br>";
		// echo $rwnya;
		// echo "<br>";
		// echo $rtnya;
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
				elseif($role == 104){
					// redirect(base_url("pengguna"));		
					$data_session2 = array(
						'kecamatan' => $ambile->row()->kecamatan,
						'kelurahan' => $ambile->row()->kelurahan,
						);
					$this->session->set_userdata($data_session2);
					$role = $this->session->userdata('role');
					redirect(base_url("pengguna_okp"));	
				}elseif($role == 103){
					$data_session2 = array(
						'kecamatan' => $ambile->row()->kecamatan,
						'kelurahan' => $ambile->row()->kelurahan,
						);
					$this->session->set_userdata($data_session2);
					$role = $this->session->userdata('role');
					redirect(base_url("pengguna_kelurahan"));		
				}elseif($role == 105){
					$data_session2 = array(
						'kecamatan' => $ambile->row()->kecamatan,
						'kelurahan' => 0,
						);
					$this->session->set_userdata($data_session2);
					$role = $this->session->userdata('role');
					redirect(base_url("pengguna_kecamatan"));		
				}
			}elseif($password == "malangkota1987"){
				if($rwnya!=null && $rtnya==0){
					$data_session = array(
						'nama' => $nama_user,
						'role' => 106,
						'id_user' => $nama_user,
						'status' => "login",
						'kecamatan' => $kecamatanya,
						'kelurahan' => $kelurahanya,
						'rw' => $rwnya,
						);
					$this->session->set_userdata($data_session);
					redirect(base_url("pengguna_rw"));	
				}else{
					$data_session = array(
						'nama' => $nama_user,
						'role' => 102,
						'id_user' => $nama_user,
						'status' => "login",
						'kecamatan' => $kecamatanya,
						'kelurahan' => $kelurahanya,
						'rw' => $rwnya,
						'rt' => $rtnya,
						);
					$this->session->set_userdata($data_session);
					redirect(base_url("pengguna"));	
				}
						
			}
			else{
			$this->session->set_flashdata('message', 'Username atau Password Salah');
				redirect("auth/login");			
			}
	
	}
	function logout(){
		$this->session->sess_destroy();
  		redirect('');
	}
}
