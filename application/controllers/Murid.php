<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Murid extends CI_Controller {

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
		 $this->load->model('Murid_model');
	 }

	public function index()
	{
		$data = array(
			'menu_home' => 'active',
			
			'menu_murid' => '',
			'menu_hafalan' => '',
		);

		//Menampilkan Data Ke Halaman Dashboard
		$data['data_murid'] = $this->Murid_model->data_murid();
		$data['setor_hafalan'] = $this->Murid_model->setor_hafalan();

		$this->template->load('template/template_murid', 'murid/dashboard', $data);
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
	}
	}

	// Murid
	public function murid_list()
	{
		$data = array(
			'menu_home' => '',
			
			'menu_murid' => 'active',
			'menu_hafalan' => '',
			'data_murid' =>$this->Murid_model->get_all_murid());
			if( $this->input->post('keyword')){
				$data['data_murid']=$this->Murid_model->cariDataMurid();
			
			}

		;

		

		$this->template->load('template/template_murid', 'murid/murid_list', $data);
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
	}
	}


		public function profil_murid()
	{
		$username = $this->session->userdata('nama');
		$data = array(
			'menu_home' => '',
			'menu_murid' => '',
			'menu_hafalan' => '',
			'data_murid' =>$this->Murid_model->get_all_murid(),
			'data_murid' =>$this->Murid_model->get_all_murid_by_username($username),

		);

		$this->template->load('template/template_murid', 'murid/profil_murid', $data);
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
	}
	}
	//End Murid

	// Hafalan
		public function hafalan_list()
	{
		$username = $this->session->userdata('nama');
		$data = array(
			'menu_home' => '',
			
			'menu_murid' => '',
			'menu_hafalan' => 'active',
			'setor_hafalan' =>$this->Murid_model->get_all_hafalan(),
			'setor_hafalan' =>$this->Murid_model->get_all_hafalan_by_username($username),

		);

		$this->template->load('template/template_murid', 'murid/hafalan_list', $data);
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
	}
	}

	//end hafalan

	//Logout
	function logout(){
		$this->session->sess_destroy();
		redirect(site_url('login'));
	}
}	

