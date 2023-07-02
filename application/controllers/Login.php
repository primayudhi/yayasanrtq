<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */

	 public function __construct()
	 {
		 parent::__construct();

		 $this->load->model('Login_model');

	 }

	public function index()
	{

		$this->load->view('login/view_login');

	}

	public function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$nama_table = $this->input->post('nama_table');
		$where = array(
			'username' => $username,
			'password' => ($password)
			);
		$cek = $this->Login_model->cek_login($nama_table,$where)->num_rows();
		if($cek > 0){
			// echo $cek;
 
			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);
 
			$this->session->set_userdata($data_session);
 
 			if($nama_table == "data_admin"){
				redirect(base_url("Admin"));
			} else if($nama_table == "data_guru"){
				redirect(base_url("Guru"));
			} else {
				redirect(base_url("Murid"));
			}
 
		}else{
			$this->load->view('login/view_login');
			// echo $cek;
		}
	}
 
	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}
