<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guru extends CI_Controller {

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
		 $this->load->model('Guru_model');
	 }

	public function index()
	{
		$data = array(
			'menu_home' => 'active',
			'menu_guru' => '',
			'menu_murid' => '',
			'menu_hafalan' => '',
		);

		//Menampilkan Data Ke Halaman Dashboard
		$data['data_guru'] = $this->Guru_model->data_guru();
		$data['data_murid'] = $this->Guru_model->data_murid();
		$data['setor_hafalan'] = $this->Guru_model->setor_hafalan();

		$this->template->load('template/template_guru', 'guru/dashboard', $data);
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
	}
	}
	// Guru 
	public function guru_list()
	{
		$data = array(
			'menu_home' => '',
			'menu_guru' => 'active',
			'menu_murid' => '',
			'menu_hafalan' => '',
			'data_guru' =>$this->Guru_model->get_all_guru());
		if( $this->input->post('keyword')){
				$data['data_guru']=$this->Guru_model->cariDataGuru();
			
			}

		;

	

		$this->template->load('template/template_guru', 'guru/guru_list', $data);
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
	}
	}

	public function profil_guru()
	{
		$username = $this->session->userdata('nama');
		$data = array(
			'menu_home' => '',
			'menu_guru' => '',
			'menu_murid' => '',
			'menu_hafalan' => '',
			'data_guru' =>$this->Guru_model->get_all_guru(),
			'data_guru' =>$this->Guru_model->get_all_guru_by_username($username),

		);

		$this->template->load('template/template_guru', 'guru/profil_guru', $data);
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
	}
	}

	//End Guru

	// Murid
	public function murid_list()
	{
		$data = array(
			'menu_home' => '',
			'menu_guru' => '',
			'menu_murid' => 'active',
			'menu_hafalan' => '',
			'data_murid' =>$this->Guru_model->get_all_murid());
		if( $this->input->post('keyword')){
				$data['data_murid']=$this->Guru_model->cariDataMurid();
			
			}

		;

		

		$this->template->load('template/template_guru', 'guru/murid_list', $data);
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
			'menu_guru' => '',
			'menu_murid' => '',
			'menu_hafalan' => 'active',
			'setor_hafalan' =>$this->Guru_model->get_all_hafalan_by_username($username),

		);

		$this->template->load('template/template_guru', 'guru/hafalan_list', $data);
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
	}
	}

		public function hapus_hafalan($id_setorhafalan)
	{
		$this->Guru_model->hapus_hafalan($id_setorhafalan);

		redirect(site_url('Guru/hafalan_list'));
	}
	

	public function _ruleshafalan() 
	{
		$this->form_validation->set_rules('id_guru','Nama Guru','trim|required');
		$this->form_validation->set_rules('id_murid','Nama Murid','trim|required');
		$this->form_validation->set_rules('id_kelas','Kelas','trim|required');
		$this->form_validation->set_rules('tanggal','Tanggal','trim|required');
		// $this->form_validation->set_rules('kualitas_hafalan','Kualitas Hafalan','trim|required');
		// $this->form_validation->set_rules('keterangan','Keterangan','trim|required');


	}

	public function ubah_hafalan($id_setorhafalan)
	{
		$setor_hafalan = $this->Guru_model->get_hafalan($id_setorhafalan);
		$data = array(
				'menu_home' => '',
				'menu_guru' => '',
				'menu_murid' => '',
				'menu_hafalan' => 'active',
				'judul' => 'UBAH HAFALAN',
				'action' => site_url('Guru/proses_ubah_hafalan'),
				'id_setorhafalan' => $setor_hafalan->id_setorhafalan,
				'id_guru' => $setor_hafalan->id_guru,
				'id_murid' => $setor_hafalan->id_murid,
				'id_kelas' => $setor_hafalan->id_kelas,
				'tanggal' => $setor_hafalan->tanggal,
				// 'kualitas_hafalan' => $setor_hafalan->kualitas_hafalan,
				// 'keterangan' => $setor_hafalan->keterangan,

				'setor_hafalan' => $setor_hafalan,
				'data_murid' => $this->Guru_model->get_all_murid(),
			'data_guru' => $this->Guru_model->get_all_guru(),
			'data_kelas' => $this->Guru_model->get_all_kelas()


		);

		$this->template->load('template/template_guru', 'Guru/form_tambah_hafalan', $data);
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
	}
	}

	public function proses_ubah_hafalan()
	{
		$this->_ruleshafalan();
		if($this->form_validation->run() == FALSE) {
			$id_setorhafalan = $this->input->post('id_setorhafalan');
			$this->ubah_hafalan($id_setorhafalan);
		}else{
			$id_setorhafalan = $this->input->post('id_setorhafalan');
			$data = array(
				'id_guru' => $this->input->post('id_guru'),
				'id_murid' => $this->input->post('id_murid'),
				'id_kelas' => $this->input->post('id_kelas'),
				'tanggal' => $this->input->post('tanggal'),
				// 'kualitas_hafalan' => $this->input->post('kualitas_hafalan'),
				// 'keterangan' => $this->input->post('keterangan'),


			
			);

			$this->Guru_model->update_hafalan($id_setorhafalan, $data);
			redirect(site_url('Guru/hafalan_list'));
		}
	}
	

	public function tambah_hafalan_guru()
	{
		$username = $this->session->userdata('nama');
		$id_guru = $this->Guru_model->get_guru_by_username($username)->id_guru;
		$nama_guru = $this->Guru_model->get_guru_by_username($username)->nama_guru;
		$data = array(
			'menu_home' => '',
			'menu_guru' => '',
			'menu_murid' => '',
			'menu_hafalan' => 'active',
			'action' => site_url('Guru/tambah_hafalan_aksi'),
			'id_setorhafalan' => set_value('id_setoranhafalan'),
			'id_guru' => set_value('id_guru', $id_guru),
			'id_murid' => set_value('id_murid'),
			'id_kelas' => set_value('id_kelas'),
			'tanggal' => set_value('tanggal'),
			'nama_guru' => $nama_guru,
			// 'kualitas_hafalan' => set_value('kualitas_hafalan'),
			// 'keterangan' => set_value('keterangan'),
			'data_murid' => $this->Guru_model->get_all_murid(),
			'data_guru' => $this->Guru_model->get_all_guru(),
			'data_kelas' => $this->Guru_model->get_all_kelas()

		);


		$this->template->load('template/template_guru', 'guru/form_tambah_hafalan', $data);
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
	}
	}


	public function tambah_hafalan_aksi()
	{
		$this->_ruleshafalan();
		if($this->form_validation->run() == FALSE) {
			$this->tambah_hafalan_guru();
		} else{
			$id_murid = $this->input->post('id_murid');
			$data = array(
				'id_guru' => $this->input->post('id_guru'),
				'id_murid' => $this->input->post('id_murid'),
				'id_kelas' => $this->input->post('id_kelas'),
				'tanggal' => $this->input->post('tanggal'),
				// 'kualitas_hafalan' => $this->input->post('kualitas_hafalan'),
				// 'keterangan' => $this->input->post('keterangan'),
			);
			$this->Guru_model->insert_hafalan($data);

			$lastid = $this->Guru_model->inqlastid()->lastid;


			redirect(site_url('Guru/hafalan_surah/'.$lastid));
		}
	}
	public function hafalan_surah($id_setorhafalan)
	{
		
		$data_hafalan = $this->Guru_model->get_hafalan($id_setorhafalan);
		$data_surah = $this->Guru_model->get_all_surah();
		$data = array(
			'menu_home' => '',
			'menu_guru' => '',
			'menu_murid' => '',
			'menu_hafalan' => 'active',
			'id_setorhafalan' => set_value('id_setoranhafalan', $id_setorhafalan),
			'id_murid' => set_value('id_murid', $data_hafalan->id_murid),
			'id_guru' => set_value('id_murid', $data_hafalan->id_guru),
			'id_kelas' => set_value('id_kelas', $data_hafalan->id_kelas),
			'tanggal' => set_value('tanggal', $data_hafalan->tanggal),
			// 'kualitas_hafalan' => set_value('kualitas_hafalan', $data_hafalan->kualitas_hafalan),
			// 'keterangan' => set_value('keterangan', $data_hafalan->keterangan),
			'data_surah' => $data_surah,
		);


		$this->template->load('template/template_guru', 'guru/form_pilih_surah', $data);
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
	}
	}

	public function hafalan_ayat($id_murid, $id_surah, $id_setorhafalan)
	{
		$data_hafalan = $this->Guru_model->get_hafalan($id_setorhafalan);
		$data_ayat_murid = $this->Guru_model->get_ayat_by_surah_murid($id_surah, $id_murid);
		$data_surah = $this->Guru_model->get_surah($id_surah);
		$data = array(
			'menu_home' => '',
			'menu_guru' => '',
			'menu_murid' => '',
			'menu_hafalan' => 'active',
			'id_setorhafalan' => set_value('id_setoranhafalan', $id_setorhafalan),
			'id_murid' => set_value('id_murid', $data_hafalan->id_murid),
			'id_guru' => set_value('id_murid', $data_hafalan->id_guru),
			'id_kelas' => set_value('id_kelas', $data_hafalan->id_kelas),
			'tanggal' => set_value('tanggal', $data_hafalan->tanggal),
			'id_surah' => set_value('tanggal', $data_surah->id_surah),
			// 'kualitas_hafalan' => set_value('kualitas_hafalan', $data_hafalan->kualitas_hafalan),
			// 'keterangan' => set_value('keterangan', $data_hafalan->keterangan),
			'data_surah' => $data_surah,
			'data_ayat' => $data_ayat_murid,
		);


		$this->template->load('template/template_guru', 'guru/form_pilih_ayat', $data);
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
	}
	}

	public function hapus_hafalan_ayat($id_surah, $id_setorhafalan, $id_ayat)
	{
		$id_murid = $this->Guru_model->get_hafalan($id_setorhafalan)->id_murid;
		$id_surah = $this->Guru_model->get_ayat($id_ayat)->id_surah;

		$this->Guru_model->hapus_hafalan_ayat($id_murid, $id_ayat);

		redirect(site_url('Guru/hafalan_ayat/'.$id_murid.'/'.$id_surah.'/'.$id_setorhafalan.'#'.$id_ayat));
	}

	public function tambah_hafalan_ayat($id_surah, $id_setorhafalan, $id_ayat)
	{
		$id_murid = $this->Guru_model->get_hafalan($id_setorhafalan)->id_murid;
		$id_surah = $this->Guru_model->get_ayat($id_ayat)->id_surah;
		$data = array(
			'id_setorhafalan' => $id_setorhafalan,
			'id_murid' => $id_murid,
			'id_ayat' => $id_ayat,
		);

		$this->Guru_model->insert_hafalan_ayat($data);

		redirect(site_url('Guru/hafalan_ayat/'.$id_murid.'/'.$id_surah.'/'.$id_setorhafalan.'#'.$id_ayat));
	}

	//end hafalan

	//Logout
	function logout(){
		$this->session->sess_destroy();
		redirect(site_url('login'));
	}

}