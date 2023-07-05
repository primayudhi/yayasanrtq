<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Publik extends CI_Controller {

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

	public function index()
	{
		$data = array(
				'data_berita' =>$this->Admin_model->get_all_berita_limit(),
			);

		$this->load->view('publik/header');
		$this->load->view('publik/content',$data);
		$this->load->view('publik/footer');
		//$this->load->view('publik/login');


	}

	public function berita($slug = NULL)
	{
		if($slug) {

			$data = array(
				'berita' =>$this->Admin_model->get_berita_slug($slug),
			);

			$this->load->view('publik/header');
			$this->load->view('publik/detail_berita', $data);
			$this->load->view('publik/footer');

		} else {

			$data = array(
				'data_berita' =>$this->Admin_model->get_all_berita(),
			);

			$this->load->view('publik/header');
			$this->load->view('publik/berita', $data);
			$this->load->view('publik/footer');

		}
	}
}
