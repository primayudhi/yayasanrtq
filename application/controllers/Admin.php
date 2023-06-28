<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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
		 $this->load->model('Admin_model');
	 }

	 //Index
	public function index()
	{
		$data = array(
			'menu_home' => 'active',
			'menu_guru' => '',
			'menu_murid' => '',
			'menu_berita' => '',
			'menu_hafalan' => '',

			
		);

		$this->template->load('template/template_admin', 'admin/dashboard', $data);
	}
	//End Index

	//Admin
	public function admin_list()
	{
		$data = array(
			'data_admin' => $this->Admin_model->get_all_admin()
		);

		$this->load->view('Admin/admin_list', $data);
	}
		public function hapus_admin($id_user)
	{
		$this->Admin_model->delete_admin($id_user);

		redirect(site_url('Admin'));
	}
	//End Admin
	
	//Murid
	public function murid_list()
	{
		$data = array(
			'menu_home' => '',
			'menu_guru' => '',
			'menu_murid' => 'active',
			'menu_berita' => '',
			'menu_hafalan' => '',
			'data_murid' =>$this->Admin_model->get_all_murid());

			if( $this->input->post('keyword')){
				$data['data_murid']=$this->Admin_model->cariDataMurid();
			
			}

		;

		$this->template->load('template/template_admin', 'admin/murid_list', $data);
	}

	

	public function tambah_murid_admin()
	{
		$data = array(
			'menu_home' => '',
			'menu_guru' => '',
			'menu_murid' => 'active',
			'menu_berita' => '',
			'menu_hafalan' => '',
			'action' => site_url('Admin/tambah_murid_aksi'),
			'id_murid' => set_value('id_murid'),
			'nama_murid' => set_value('nama_murid'),
			'kelas' => set_value('kelas'),
			'tempat_lahir' => set_value('tempat_lahir'),
			'tanggal_lahir' => set_value('tanggal_lahir'),
			'jk' => set_value('jk'),
			'alamat' => set_value('alamat'),
			'foto' => set_value('foto'),
			'no_telepon' => set_value('no_telepon'),
			'nama_ibu' => set_value('nama_ibu'),
			'nama_ayah' => set_value('nama_ayah'),
			'username' => set_value('username'),
			'password_murid' => set_value('password_murid'),
			'aktif' => set_value('aktif'),



		);

		$this->template->load('template/template_admin', 'admin/form_tambah_murid', $data);
	}

	public function hapus_murid($id_murid)
	{
		$this->Admin_model->hapus_murid($id_murid);

		redirect(site_url('Admin/murid_list'));
	}

	public function _rules() 
	{
		$this->form_validation->set_rules('nama_murid','Nama Murid','trim|required');
		$this->form_validation->set_rules('kelas','Kelas','trim|required');
		$this->form_validation->set_rules('tempat_lahir','Tempat Lahir','trim|required');
		$this->form_validation->set_rules('tanggal_lahir','Tanggal Lahir','trim|required');
		$this->form_validation->set_rules('jk','Jenis Kelamin','trim|required');
		$this->form_validation->set_rules('alamat','Alamat Murid','trim|required');
		$this->form_validation->set_rules('no_telepon','No Telepon','trim|required');
		$this->form_validation->set_rules('nama_ibu','Nama Ibu','trim|required');
		$this->form_validation->set_rules('nama_ayah','Nama Ayah','trim|required');
		$this->form_validation->set_rules('username','Username','trim|required');
		$this->form_validation->set_rules('password_murid','Password Murid','trim|required');
		$this->form_validation->set_rules('aktif','Status Aktif','trim|required');



	}

	public function tambah_murid_aksi()
	{
		$this->_rules();
		if($this->form_validation->run() == FALSE) {
			$this->tambah_murid_admin();
		} else{
			$data = array(
				'nama_murid' => $this->input->post('nama_murid'),
				'kelas' => $this->input->post('kelas'),
				'tempat_lahir' => $this->input->post('tempat_lahir'),
				'tanggal_lahir' => $this->input->post('tanggal_lahir'),
				'jk' => $this->input->post('jk'),
				'alamat' => $this->input->post('alamat'),
				'foto' => $this->input->post('foto'),
				'no_telepon' => $this->input->post('no_telepon'),
				'nama_ibu' => $this->input->post('nama_ibu'),
				'nama_ayah' => $this->input->post('nama_ayah'),
				'username' => $this->input->post('username'),
				'password_murid' => $this->input->post('password_murid'),
				'hak_akses' => 'M',
				'aktif' => $this->input->post('aktif'),
			);

			$this->Admin_model->insert_murid($data);

			$id_murid = $this->input->post('id_murid');

			$lastid = $this->Admin_model->inqlastid()->lastid;

			//setting konfigurasi upload
			$config['upload_path'] = './uploads/fotomurid/';
			$config['allowed_types'] = 'jpg|jpeg|png';
			$config['overwrite'] = true;
			$filename = 'FotoMurid-'.$lastid;
			$config['file_name'] = $filename;

			//load library upload
			$this->load->library('upload', $config);

			$this->upload->initialize($config);

			if($_FILES['foto']['name'])
			{
				if($this->upload->do_upload('foto'))
				{
					$uploadfotomurid = $this->upload->data();
					$data = array(
						'namafile' =>$uploadfotomurid['file_name'],
						'type' =>$uploadfotomurid['file_type']
					);
					$foto = $data['namafile'];
					$id_murid = $this->input->post('id_murid');
					$data = array(
						'foto' => $foto,
					);

					$this->Admin_model->update_murid($lastid, $data);
				}
			}

			redirect(site_url('Admin/murid_list'));
		}
	
		
	}


	public function ubah_murid($id_murid)
	{
		$data_murid = $this->Admin_model->get_murid($id_murid);
		$data = array(
				'menu_home' => '',
				'menu_murid' => 'active',
				'menu_guru' => '',
				'menu_berita' => '',
				'menu_hafalan' => '',
				'judul' => 'UBAH MURID',
				'action' => site_url('Admin/proses_ubah_murid'),
				'id_murid' => $data_murid->id_murid,
				'nama_murid' => $data_murid->nama_murid,
				'kelas' => $data_murid->kelas,
				'tempat_lahir' => $data_murid->tempat_lahir,
				'tanggal_lahir' => $data_murid->tanggal_lahir,
				'jk' => $data_murid->jk,
				'alamat' => $data_murid->alamat,
				'foto' => $data_murid->foto,
				'no_telepon' => $data_murid->no_telepon,
				'nama_ibu' => $data_murid->nama_ibu,
				'nama_ayah' => $data_murid->nama_ayah,
				'username' => $data_murid->username,
				'password_murid' => $data_murid->password_murid,
				'hak_akses' => $data_murid->hak_akses,
				'aktif' => $data_murid->aktif,
				'data_murid' => $data_murid 
		);

		$this->template->load('template/template_admin', 'Admin/form_tambah_murid', $data);
	}

	public function proses_ubah_murid()
	{
		$this->_rules();
		if($this->form_validation->run() == FALSE) {
			$id_murid = $this->input->post('id_murid');
			$this->ubah_murid($id_murid);
		}else{
			$id_murid = $this->input->post('id_murid');
			$data = array(
				'nama_murid' => $this->input->post('nama_murid'),
				'kelas' => $this->input->post('kelas'),
				'tempat_lahir' => $this->input->post('tempat_lahir'),
				'tanggal_lahir' => $this->input->post('tanggal_lahir'),
				'jk' => $this->input->post('jk'),
				'alamat' => $this->input->post('alamat'),
				'foto' => $this->input->post('foto'),
				'no_telepon' => $this->input->post('no_telepon'),
				'nama_ibu' => $this->input->post('nama_ibu'),
				'nama_ayah' => $this->input->post('nama_ayah'),
				'username' => $this->input->post('username'),
				'password_murid' => $this->input->post('password_murid'),
				'hak_akses' => $this->input->post('hak_akses'),
				'aktif' => $this->input->post('aktif'),
			);

			$this->Admin_model->update_murid($id_murid, $data);
			redirect(site_url('Admin/murid_list'));
		}

		/*
		public function pencarian(){
			$pencarian = $this->input->post('pencarian');
			$data['murid_list']=$this->Admin_model->get_pencarian($pencarian);
			$this->template->load('template/template_admin', 'admin/murid_list', $data);
		}

		*/
	}
	//End Murid

	// Guru 
	public function guru_list()
	{
		$data = array(
			'menu_home' => '',
			'menu_guru' => 'active',
			'menu_murid' => '',
			'menu_berita' => '',
			'menu_hafalan' => '',
			'data_guru' =>$this->Admin_model->get_all_guru());
			if( $this->input->post('keyword')){
				$data['data_guru']=$this->Admin_model->cariDataGuru();
			
			}

		;
		

		$this->template->load('template/template_admin', 'admin/guru_list', $data);
	}
	public function tambah_guru_admin()
	{
		$data = array(
			'menu_home' => '',
			'menu_guru' => 'active',
			'menu_murid' => '',
			'menu_berita' => '',
			'menu_hafalan' => '',
			'action' => site_url('Admin/tambah_guru_aksi'),
			'id_guru' => set_value('id_guru'),
			'nama_guru' => set_value('nama_guru'),
			'nik_guru' => set_value('nik_guru'),
			'nip_guru' => set_value('nip_guru'),
			'tempat_lahir' => set_value('tempat_lahir'),
			'tanggal_lahir' => set_value('tanggal_lahir'),
			'alamat' => set_value('alamat'),
			'jk' => set_value('jk'),
			'foto' => set_value('foto'),
			'jabatan' => set_value('jabatan'),
			'no_telepon' => set_value('no_telepon'),
			'email' => set_value('email'),
			'keterangan' => set_value('keterangan'),
			'username' => set_value('username'),
			'password_guru' => set_value('password_guru'),
			'hak_akses' => set_value('hak_akses'),
			'aktif' => set_value('aktif'),
		);


		$this->template->load('template/template_admin', 'admin/form_tambah_guru', $data);
	}

	public function hapus_guru($id_guru)
	{
		$this->Admin_model->hapus_guru($id_guru);

		redirect(site_url('Admin/guru_list'));
	}
	public function _rulesguru() 
	{
		$this->form_validation->set_rules('nama_guru','Nama Guru','trim|required');
		$this->form_validation->set_rules('nik_guru','Nik Guru','trim|required');
		$this->form_validation->set_rules('nip_guru','Nip Guru','trim|required');
		$this->form_validation->set_rules('tempat_lahir','Tempat Lahir','trim|required');
		$this->form_validation->set_rules('tanggal_lahir','Tanggal Lahir','trim|required');
		$this->form_validation->set_rules('alamat','Alamat Guru','trim|required');
		$this->form_validation->set_rules('jk','Jenis Kelamin','trim|required');
		$this->form_validation->set_rules('jabatan','Jabatan','trim|required');
		$this->form_validation->set_rules('no_telepon','No Telepon','trim|required');
		$this->form_validation->set_rules('email','Email','trim|required');
		$this->form_validation->set_rules('keterangan','Keterangan','trim|required');
		$this->form_validation->set_rules('username','Username','trim|required');
		$this->form_validation->set_rules('password_guru','Password Guru','trim|required');
		$this->form_validation->set_rules('hak_akses','Hak Akses','trim|required');
		$this->form_validation->set_rules('aktif','Status Aktif','trim|required');

	}
	public function tambah_guru_aksi()
	{
		$this->_rulesguru();
		if($this->form_validation->run() == FALSE) {
			$this->tambah_guru_admin();
		} else{
			$data = array(
				'nama_guru' => $this->input->post('nama_guru'),
				'nik_guru' => $this->input->post('nik_guru'),
				'nip_guru' => $this->input->post('nip_guru'),
				'tempat_lahir' => $this->input->post('tempat_lahir'),
				'tanggal_lahir' => $this->input->post('tanggal_lahir'),
				'alamat' => $this->input->post('alamat'),
				'jk' => $this->input->post('jk'),
				'jabatan' => $this->input->post('jabatan'),
				'no_telepon' => $this->input->post('no_telepon'),
				'email' => $this->input->post('email'),
				'keterangan' => $this->input->post('keterangan'),
				'username' => $this->input->post('username'),
				'password_guru' => $this->input->post('password_guru'),
				'hak_akses' => 'G',
				'aktif' => $this->input->post('aktif'),
			);

			$this->Admin_model->insert_guru($data);

			$id_guru = $this->input->post('id_guru');

			$lastid = $this->Admin_model->inqlastid()->lastid;

			//setting konfigurasi upload
			$config['upload_path'] = './uploads/fotoguru/';
			$config['allowed_types'] = 'jpg|jpeg|png';
			$config['overwrite'] = true;
			$filename = 'FotoGuru-'.$lastid;
			$config['file_name'] = $filename;

			//load library upload
			$this->load->library('upload', $config);

			$this->upload->initialize($config);

			if($_FILES['foto']['name'])
			{
				if($this->upload->do_upload('foto'))
				{
					$uploadfotoguru = $this->upload->data();
					$data = array(
						'namafile' =>$uploadfotoguru['file_name'],
						'type' =>$uploadfotoguru['file_type']
					);
					$foto = $data['namafile'];
					$id_guru = $this->input->post('id_guru');
					$data = array(
						'foto' => $foto,
					);

					$this->Admin_model->update_guru($lastid, $data);
				}
			}

			redirect(site_url('Admin/guru_list'));
		}
	}
	/*
	public function detail_guru($id_guru){
		$data = array(
			'menu_home' => '',
			'menu_guru' => 'active',
			'menu_murid' => '',
			'menu_berita' => '',
			'menu_hafalan' => '',
			'data_guru' =>$this->Admin_model->detail_dataguru());

		$this->template->load('template/template_admin', 'admin/detail_guru', $data);
	}
	*/

	public function ubah_guru($id_guru)
	{
		$data_guru = $this->Admin_model->get_guru($id_guru);
		$data = array(
				'menu_home' => '',
				'menu_murid' => '',
				'menu_guru' => 'active',
				'menu_berita' => '',
				'menu_hafalan' => '',
				'judul' => 'UBAH GURU',
				'action' => site_url('Admin/proses_ubah_guru'),
				'id_guru' => $data_guru->id_guru,
				'nama_guru' => $data_guru->nama_guru,
				'nik_guru' => $data_guru->nik_guru,
				'nip_guru' => $data_guru->nip_guru,
				'tempat_lahir' => $data_guru->tempat_lahir,
				'tanggal_lahir' => $data_guru->tanggal_lahir,
				'alamat' => $data_guru->alamat,
				'jk' => $data_guru->jk,
				'foto' => $data_guru->foto,
				'jabatan' => $data_guru->jabatan,
				'no_telepon' => $data_guru->no_telepon,
				'email' => $data_guru->email,
				'keterangan' => $data_guru->keterangan,
				'username' => $data_guru->username,
				'password_guru'=> $data_guru->password_guru,
				'hak_akses' => $data_guru->hak_akses,
				'aktif' => $data_guru->aktif,
				'data_guru' => $data_guru
		);

		$this->template->load('template/template_admin', 'Admin/form_tambah_guru', $data);
	}

	public function proses_ubah_guru()
	{
		$this->_rulesguru();
		if($this->form_validation->run() == FALSE) {
			$id_guru = $this->input->post('id_guru');
			$this->ubah_guru($id_guru);
		}else{
			$id_guru = $this->input->post('id_guru');
			$data = array(
				'nama_guru' => $this->input->post('nama_guru'),
				'nik_guru' => $this->input->post('nik_guru'),
				'nip_guru' => $this->input->post('nip_guru'),
				'tempat_lahir' => $this->input->post('tempat_lahir'),
				'tanggal_lahir' => $this->input->post('tanggal_lahir'),
				'alamat' => $this->input->post('alamat'),
				'jk' => $this->input->post('jk'),
				'foto' => $this->input->post('foto'),
				'jabatan' => $this->input->post('jabatan'),
				'no_telepon' => $this->input->post('no_telepon'),
				'email' => $this->input->post('email'),
				'keterangan' => $this->input->post('keterangan'),
				'username' => $this->input->post('username'),
				'password_guru' => $this->input->post('password_guru'),
				'hak_akses' => $this->input->post('hak_akses'),
				'aktif' => $this->input->post('aktif'),
			);

			$this->Admin_model->update_guru($id_guru, $data);
			redirect(site_url('Admin/guru_list'));
		}
	}
	// End Guru

	// Berita 
	public function berita_list()
	{
		$data = array(
			'menu_home' => '',
			'menu_guru' => '',
			'menu_murid' => '',
			'menu_berita' => 'active',
			'menu_hafalan' => '',
			'data_berita' =>$this->Admin_model->get_all_berita());
		if( $this->input->post('keyword')){
				$data['data_berita']=$this->Admin_model->cariDataBerita();
			
			}

		;

		

		$this->template->load('template/template_admin', 'Admin/berita_list', $data);
	}
	public function tambah_berita_admin()
	{
		$data = array(
			'menu_home' => '',
			'menu_guru' => '',
			'menu_murid' => '',
			'menu_berita' => 'active',
			'menu_hafalan' => '',
			'action' => site_url('Admin/tambah_berita_aksi'),
			'id_berita' => set_value('id_berita'),
			'tanggal' => set_value('tanggal'),
			'judul' => set_value('judul'),
			'foto' => set_value('foto'),
			'isi' => set_value('isi'),
		);

		$this->template->load('template/template_admin', 'admin/form_tambah_berita', $data);
	}

	public function hapus_berita($id_berita)
	{
		$this->Admin_model->hapus_berita($id_berita);

		redirect(site_url('Admin/berita_list'));
	}

	public function _rulesberita() 
	{
		$this->form_validation->set_rules('tanggal','Tanggal','trim|required');
		$this->form_validation->set_rules('judul','Judul','trim|required');
		$this->form_validation->set_rules('isi','Isi','trim|required');
	}

	public function tambah_berita_aksi()
	{
		$this->_rulesberita();
		if($this->form_validation->run() == FALSE) {
			$this->tambah_berita_admin();
		} else{
			$data = array(
				'tanggal' => $this->input->post('tanggal'),
				'judul' => $this->input->post('judul'),
				'foto' => $this->input->post('foto'),
				'isi' => $this->input->post('isi'),
			);

			
			$this->Admin_model->insert_berita($data);

			$id_berita = $this->input->post('id_berita');

			$lastid = $this->Admin_model->inqlastid()->lastid;

			//setting konfigurasi upload
			$config['upload_path'] = './uploads/fotoberita/';
			$config['allowed_types'] = 'jpg|jpeg|png';
			$config['overwrite'] = true;
			$filename = 'FotoBerita-'.$lastid;
			$config['file_name'] = $filename;

			//load library upload
			$this->load->library('upload', $config);

			$this->upload->initialize($config);

			if($_FILES['foto']['name'])
			{
				if($this->upload->do_upload('foto'))
				{
					$uploadfotoberita = $this->upload->data();
					$data = array(
						'namafile' =>$uploadfotoberita['file_name'],
						'type' =>$uploadfotoberita['file_type']
					);
					$foto = $data['namafile'];
					$id_berita = $this->input->post('id_berita');
					$data = array(
						'foto' => $foto,
					);

					$this->Admin_model->update_berita($lastid, $data);
				}
			}

			redirect(site_url('Admin/berita_list'));
		}
	}

	public function ubah_berita($id_berita)
	{
		$data_berita = $this->Admin_model->get_berita($id_berita);
		$data = array(
				'menu_home' => '',
				'menu_murid' => '',
				'menu_guru' => '',
				'menu_berita' => 'active',
				'menu_hafalan' => '',
				'judul' => 'UBAH BERITA',
				'action' => site_url('Admin/proses_ubah_berita'),
				'id_berita' => $data_berita->id_berita,
				'tanggal' => $data_berita->tanggal,
				'judul' => $data_berita->judul,
				'foto' => $data_berita->foto,
				'isi' => $data_berita->isi,
				'data_berita' => $data_berita 
		);

		$this->template->load('template/template_admin', 'Admin/form_tambah_berita', $data);
	}

	public function proses_ubah_berita()
	{
		$this->_rulesberita();
		if($this->form_validation->run() == FALSE) {
			$id_berita = $this->input->post('id_berita');
			$this->ubah_berita($id_berita);
		}else{
			$id_berita = $this->input->post('id_berita');
			$data = array(
				'tanggal' => $this->input->post('tanggal'),
				'judul' => $this->input->post('judul'),
				'foto' => $this->input->post('foto'),
				'isi' => $this->input->post('isi'),
			);

			$this->Admin_model->update_berita($id_berita, $data);
			redirect(site_url('Admin/berita_list'));
		}
	}

	public function get_data_detail_berita() {
  	$id = $this->input->post('id_berita');
  	// Lakukan logika untuk mengambil detail data berdasarkan $id

  	// Contoh pengiriman data dalam bentuk HTML
  	$data = '<p>Ini adalah detail data dengan ID: '.$id.'</p>';
  	echo $data;
}


	// Hafalan
public function hafalan_list()
	{
		$data = array(
			'menu_home' => '',
			'menu_guru' => '',
			'menu_murid' => '',
			'menu_berita' => '',
			'menu_hafalan' => 'active',
			'setor_hafalan' =>$this->Admin_model->get_all_hafalan());
			/*
			if( $this->input->post('keyword')){
				$data['setor_hafalan']=$this->Admin_model->cariDataHafalan();
			
			}

		;
		*/


		$this->template->load('template/template_admin', 'admin/hafalan_list', $data);
	}

		public function hapus_hafalan($id_setorhafalan)
	{
		$this->Admin_model->hapus_hafalan($id_setorhafalan);

		redirect(site_url('Admin/hafalan_list'));
	}

	public function _ruleshafalan() 
	{
		$this->form_validation->set_rules('id_guru','Nama Guru','trim|required');
		$this->form_validation->set_rules('id_murid','Nama Murid','trim|required');
		$this->form_validation->set_rules('tanggal','Tanggal','trim|required');
		$this->form_validation->set_rules('kualitas_hafalan','Kualitas Hafalan','trim|required');
		$this->form_validation->set_rules('keterangan','Keterangan','trim|required');


	}

	public function ubah_hafalan($id_setorhafalan)
	{
		$setor_hafalan = $this->Admin_model->get_hafalan($id_setorhafalan);
		$data = array(
				'menu_home' => '',
				'menu_guru' => '',
				'menu_murid' => '',
				'menu_berita' => '',
				'menu_hafalan' => 'active',
				'judul' => 'UBAH HAFALAN',
				'action' => site_url('Admin/proses_ubah_hafalan'),
				'id_setorhafalan' => $setor_hafalan->id_setorhafalan,
				'id_guru' => $setor_hafalan->id_guru,
				'id_murid' => $setor_hafalan->id_murid,
				'tanggal' => $setor_hafalan->tanggal,
				'kualitas_hafalan' => $setor_hafalan->kualitas_hafalan,
				'keterangan' => $setor_hafalan->keterangan,

				'setor_hafalan' => $setor_hafalan,
				'data_murid' => $this->Admin_model->get_all_murid(),
				'data_guru' => $this->Admin_model->get_all_guru()

		);

		$this->template->load('template/template_admin', 'Admin/form_tambah_hafalan', $data);
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
				'tanggal' => $this->input->post('tanggal'),
				'kualitas_hafalan' => $this->input->post('kualitas_hafalan'),
				'keterangan' => $this->input->post('keterangan'),
			
			);

			$this->Admin_model->update_hafalan($id_setorhafalan, $data);
			redirect(site_url('Admin/hafalan_list'));
		}
	}
	

	public function tambah_hafalan_admin()
	{
		$data = array(
			'menu_home' => '',
			'menu_guru' => '',
			'menu_murid' => '',
			'menu_berita' => '',
			'menu_hafalan' => 'active',
			'action' => site_url('Admin/tambah_hafalan_aksi'),
			'id_setorhafalan' => set_value('id_setoranhafalan'),
			'id_guru' => set_value('id_guru'),
			'id_murid' => set_value('id_murid'),
			'tanggal' => set_value('tanggal'),
			'kualitas_hafalan' => set_value('kualitas_hafalan'),
			'keterangan' => set_value('keterangan'),
			'data_murid' => $this->Admin_model->get_all_murid(),
			'data_guru' => $this->Admin_model->get_all_guru()

		);


		$this->template->load('template/template_admin', 'admin/form_tambah_hafalan', $data);
	}

	public function tambah_hafalan_aksi()
	{
		$this->_ruleshafalan();
		if($this->form_validation->run() == FALSE) {
			$this->tambah_hafalan_admin();
		} else{
			$data = array(
				'id_guru' => $this->input->post('id_guru'),
				'id_murid' => $this->input->post('id_murid'),
				'tanggal' => $this->input->post('tanggal'),
				'kualitas_hafalan' => $this->input->post('kualitas_hafalan'),
				'keterangan' => $this->input->post('keterangan'),
			);
			$this->Admin_model->insert_hafalan($data);
			redirect(site_url('Admin/hafalan_list'));
		}
	}
	//End Hafalan

	//Logout
	function logout(){
		$this->session->sess_destroy();
		redirect(site_url('login'));
	}

}