<?php
class Surat_Masuk extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
}
	
	public function index($nama='')
	{
		$data['judul'] =  'Halaman Surat Masuk';
		$data['nama'] = $nama;
		$this->load->view('templates/header',$data);
		$this->load->view('surat_masuk/index');
		$this->load->view('templates/footer');

	}
}