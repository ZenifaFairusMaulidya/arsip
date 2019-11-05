<?php

class Arsip extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Arsip_model');
		$this->load->library('form_validation');
		
	}

	public function index()
	{
		$data['judul'] = 'Datar Arsip Masuk';
		$data['arsip'] = $this->Arsip_model->getAllArsip();
		/*if ($this->input->post('keyword')) {
			$data['arsip'] = $this->Arsip_model->cariDataArsip();
		}*/
		$this->load->view('templates/header', $data);
		$this->load->view('arsip/index');
		$this->load->view('templates/footer');
	}


	public function tambah()
	{
		$data['judul'] = 'Form Tambah Data Arsip Surat Masuk';

		$this->form_validation->set_rules('nomor_surat', 'Nomor Surat', 'required');
		$this->form_validation->set_rules('asal_surat', 'Asal Surat', 'required');
		$this->form_validation->set_rules('perihal', 'Perihal', 'required');
		$this->form_validation->set_rules('ringkasan', 'Ringkasan', 'required');
		$this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
		$this->form_validation->set_rules('upload_file', 'Upload File', 'required');

		if ($this->form_validation->run()==FALSE) {
			$this->load->view('templates/header', $data);
			$this->load->view('arsip/tambah');
			$this->load->view('templates/footer');
		}else{
			$this->Arsip_model->tambahDataArsip();
			$this->session->set_flashdata('flash', 'Ditambahkan');
			redirect('arsip/');
		}
	}


	public function hapus($id)
	{
		$this->Arsip_model->hapusDataArsip($id);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('arsip/');
	}


	public function detail($id)
	{
		$data['surat_masuk'] = $this->Arsip_model->getArsipById($id);
		$this->load->view('arsip/detail', $data);
	}


	public function ubah($id)
	{
		$data['judul'] = 'Form Ubah Data Arsip Surat Masuk';
		$data['surat_masuk'] = $this->Arsip_model->getArsipById($id);

		$this->form_validation->set_rules('nomor_surat', 'Nomor Surat', 'required');
		$this->form_validation->set_rules('asal_surat', 'Asal Surat', 'required');
		$this->form_validation->set_rules('perihal', 'Perihal', 'required');
		$this->form_validation->set_rules('ringkasan', 'Ringkasan', 'required');
		$this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
		$this->form_validation->set_rules('upload_file', 'Upload File', 'required');

		if ($this->form_validation->run()==FALSE) {
			$this->load->view('templates/header');
			$this->load->view('arsip/ubah', $data);
			
		}else{
			$this->Arsip_model->ubahDataArsip($id);
			$this->session->set_flashdata('flash', 'Diubah');
			redirect('arsip/');
		}
	}

	public function search()
	{
		$keyword = $this->input->post('keyword');
		$this->db->like('perihal', $keyword);
		$this->db->or_like('tanggal', $keyword);
		$this->db->or_like('ringkasan', $keyword);
		$data['surat_masuk']=$this->Arsip_model->get_arsip_keyword($keyword, $per_page, $uri, $perihal);
		$this->load->view('arsip/search', $data);
		$this->load->helper('tanggal');
		
	}

	public function surat_edaran(){
		$data['surat_masuk']=$this->Arsip_model->edaran();
		$this->load->view('templates/header', $data);
		$this->load->view('arsip/surat_edaran',$data);
		$this->load->view('templates/footer');
	}

	public function surat_pemberitahuan(){
		$data['surat_masuk']=$this->Arsip_model->pemberitahuan();
		$this->load->view('templates/header', $data);
		$this->load->view('arsip/surat_pemberitahuan',$data);
		$this->load->view('templates/footer');
	}

	public function surat_pengadaan(){
		$data['surat_masuk']=$this->Arsip_model->pengadaan();
		$this->load->view('templates/header', $data);
		$this->load->view('arsip/surat_pengadaan',$data);
		$this->load->view('templates/footer');
	}

	public function surat_pengantar(){
		$data['surat_masuk']=$this->Arsip_model->pengantar();
		$this->load->view('templates/header', $data);
		$this->load->view('arsip/surat_pengantar',$data);
		$this->load->view('templates/footer');
	}

	public function surat_pengumuman(){
		$data['surat_masuk']=$this->Arsip_model->pengumuman();
		$this->load->view('templates/header', $data);
		$this->load->view('arsip/surat_pengumuman',$data);
		$this->load->view('templates/footer');
	}

	public function surat_permintaan(){
		$data['surat_masuk']=$this->Arsip_model->permintaan();
		$this->load->view('templates/header', $data);
		$this->load->view('arsip/surat_permintaan',$data);
		$this->load->view('templates/footer');
	}

	public function surat_permohonan(){
		$data['surat_masuk']=$this->Arsip_model->permohonan();
		$this->load->view('templates/header', $data);
		$this->load->view('arsip/surat_permohonan',$data);
		$this->load->view('templates/footer');
	}

	public function surat_undangan(){
		$data['surat_masuk']=$this->Arsip_model->undangan();
		$this->load->view('templates/header', $data);
		$this->load->view('arsip/surat_undangan',$data);
		$this->load->view('templates/footer');
	}
}