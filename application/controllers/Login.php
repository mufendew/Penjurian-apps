<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$autoload['libraries'] = array('database','session');
		$this->load->library('session');
		$autoload['helper'] = array('url');
		$this->load->model('M_login');
		
	}
	public function index()
	{
		$this->load->view('V_login');
	}

function login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$namatim = $this->input->post('tim');
		
		$where = array(
			'USERNAME' => $username,
			'PASSWORD' => $password
			);
			
		$whereTim = array(
			'NAMA_TIM' => $namatim
			);
			
		$cek = $this->M_login->cek_login("db_juri",$where)->num_rows();
		$cekTim = $this->M_login->cek_login("db_peserta",$whereTim)->num_rows();
		
		if($cek > 0 && $cekTim > 0){
        
            $id = $this->M_login->get_id($username)->ID_JURI;
            $nama = $this->M_login->get_id($username)->NAMA_JURI;
            $id_tim = $this->M_login->get_id_tim($namatim)->ID_TIM;
            $nama_tim = $this->M_login->get_id_tim($namatim)->NAMA_TIM;
            $ruang = $this->M_login->get_id($username)->RUANG;
            $sesi = $this->M_login->get_id($username)->SESI;

			$data_session = array(
				'NAMA_JURI' => $nama,
				'ID_JURI' => $id,
				'ID_TIM' => $id_tim,
				'NAMA_TIM' => $nama_tim,
				'RUANG' => $ruang,
				'SESI' => $sesi,
				'status' => "login"
				);
    
			$this->session->set_userdata($data_session);
            
			redirect("Juri");
 
		}else{
			echo "<script>alert('Username dan password salah !');</script>";
			redirect('Login','refresh');
		}
	}
 
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('index.php/Login'));
	}

}

/* End of file Login 2.php */
/* Location: .//C/Users/Fendew/AppData/Local/Temp/fz3temp-2/Login 2.php */