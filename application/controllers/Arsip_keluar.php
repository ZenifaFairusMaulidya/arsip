<?php

class Arsip_keluar extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('ArsipKeluar_model');
		$this->load->library('form_validation');
		
	}

	public function index()
	{
		$data['judul'] = 'Daftar Arsip Surat Keluar';
		$data['arsip'] = $this->ArsipKeluar_model->getAllArsip();
		if ($this->input->post('keyword')) {
			$data['arsip'] = $this->ArsipKeluar_model->cariDataArsip();
		}
		$this->load->view('templates/header', $data);
		$this->load->view('arsipkeluar/index');
		$this->load->view('templates/footer');
	}


	public function tambah()
	{
		$data['judul'] = 'Form Tambah Data Arsip Surat Keluar';

		$this->form_validation->set_rules('nomor_surat', 'Nomor Surat', 'required');
		$this->form_validation->set_rules('asal_surat', 'Asal Surat', 'required');
		$this->form_validation->set_rules('perihal', 'Perihal', 'required');
		$this->form_validation->set_rules('ringkasan', 'Ringkasan', 'required');
		$this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
		$this->form_validation->set_rules('upload_file', 'Upload File', 'required');

		if ($this->form_validation->run()==FALSE) {
			$this->load->view('templates/header', $data);
			$this->load->view('arsipkeluar/tambah');
			$this->load->view('templates/footer');
		}else{
			$this->ArsipKeluar_model->tambahDataArsip();
			$this->session->set_flashdata('flash', 'Ditambahkan');
			redirect('Arsip_keluar');
		}
	}


	public function hapus($id)
	{
		$this->ArsipKeluar_model->hapusDataArsip($id);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('Arsip_keluar');
	}


	public function detail($id)
	{
		$data['surat_keluar']=$this->ArsipKeluar_model->getArsipById($id);
		$this->load->view('templates/header');
		$this->load->view('arsipkeluar/detail', $data);
		$this->load->view('templates/footer');
	}


	public function ubah($id)
	{
		$data['judul'] = 'Form Ubah Data Arsip Surat Keluar';
		$data['surat_keluar'] = $this->ArsipKeluar_model->getArsipById($id);

		$this->form_validation->set_rules('nomor_surat', 'Nomor Surat', 'required');
		$this->form_validation->set_rules('asal_surat', 'Asal Surat', 'required');
		$this->form_validation->set_rules('perihal', 'Perihal', 'required');
		$this->form_validation->set_rules('ringkasan', 'Ringkasan', 'required');
		$this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
		$this->form_validation->set_rules('upload_file', 'Upload File', 'required');

		if ($this->form_validation->run()==FALSE) {
			$this->load->view('templates/header');
			$this->load->view('arsipkeluar/ubah', $data);
			$this->load->view('templates/footer');
		}else{
			$this->ArsipKeluar_model->ubahDataArsip();
			$this->session->set_flashdata('flash', 'Diubah');
			redirect('Arsip_keluar/');
		}
	}

	public function search()
	{
		$keyword = $this->input->post('keyword');
		$data['surat_keluar']=$this->ArsipKeluar_model->get_arsip_keyword($keyword);
		$this->load->view('templates/header');
		$this->load->view('arsipkeluar/search', $data);
		$this->load->view('templates/footer');
	}
	public function keluar_edaran(){
		$data['judul'] = 'Daftar Arsip Surat Keluar';
		$data['surat_keluar']=$this->ArsipKeluar_model->edaran();
		$this->load->view('templates/header');
		$this->load->view('arsipkeluar/keluar_edaran',$data);
		$this->load->view('templates/footer');
	}

	public function keluar_pemberitahuan(){
		$data['surat_keluar']=$this->ArsipKeluar_model->pemberitahuan();
		$this->load->view('templates/header');
		$this->load->view('arsipkeluar/keluar_pemberitahuan',$data);
		$this->load->view('templates/footer');

	}

	public function keluar_pengadaan(){
		$data['surat_keluar']=$this->ArsipKeluar_model->pengadaan();
		$this->load->view('templates/header');
		$this->load->view('arsipkeluar/keluar_pengadaan',$data);
		$this->load->view('templates/footer');
	}

	public function keluar_pengantar(){
		$data['surat_keluar']=$this->ArsipKeluar_model->pengantar();
		$this->load->view('templates/header');
		$this->load->view('arsipkeluar/keluar_pengantar',$data);
		$this->load->view('templates/footer');
	}

	public function keluar_pengumuman(){
		$data['surat_keluar']=$this->ArsipKeluar_model->pengumuman();
		$this->load->view('templates/header');
		$this->load->view('arsipkeluar/keluar_pengumuman',$data);
		$this->load->view('templates/footer');
	}

	public function keluar_permintaan(){
		$data['surat_keluar']=$this->ArsipKeluar_model->permintaan();
		$this->load->view('templates/header');
		$this->load->view('arsipkeluar/keluar_permintaan',$data);
		$this->load->view('templates/footer');
	}

	public function keluar_permohonan(){
		$data['surat_keluar']=$this->ArsipKeluar_model->permohonan();
		$this->load->view('templates/header');
		$this->load->view('arsipkeluar/keluar_permohonan',$data);
		$this->load->view('templates/footer');
	}

	public function keluar_undangan(){
		$data['surat_keluar']=$this->ArsipKeluar_model->undangan();
		$this->load->view('templates/header');
		$this->load->view('arsipkeluar/keluar_undangan',$data);
		$this->load->view('templates/footer');
	}
}