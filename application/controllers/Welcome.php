<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index() //method default
	{
		if (isset($_POST['search_submit'])) {
			$data['ringkasan'] = $this->input->post('cari');
			//untuk paging pencarian
			$this->session->set_userdata('sess_ringkasan', $data['ringkasan']);
		}
		else {
			$data['ringkasan'] = $this->session->userdata('sess_ringkasan');
		}

		//load model
		$this->load->model('Arsip_model');
		$this->db->like('perihal', $data['ringkasan']);
		$this->db->or_like('tanggal', $data)
		$this->db->from('surat_masuk');
		$this->load->view('arsip/index');
	}

	public function coba(){
		echo "coba";
	}
}
