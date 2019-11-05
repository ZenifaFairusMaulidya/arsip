<?php
/**
 * 
 */
class kategori_model extends CI_model{
	
	public function kategorisrt()
	{
		$this->load->view('kategori/edaran');
		$this->load->view('kategori/pemberitahuan');
		$this->load->view('kategori/pengadaan');
		$this->load->view('kategori/pengantar');
		$this->load->view('kategori/pengumuman');
		$this->load->view('kategori/permintaan');
		$this->load->view('kategori/permohonan');
		$this->load->view('kategori/undangan');
	}
	public function previewsurat()
	{
		$koneksi = mysqli_connect("localhost", "root", "", "arsip");
		$this->db->select('perihal');
		$query = $this->db->get('surat_masuk');
		$query = $this->db->get_where('perihal => %Edaran%');
        
	}
	public function m_edaran()
	{
		$this->db->select('*');
		$this->db->from('surat_masuk');
		$this->db->where('perihal');
		$this->db->like('edaran');
		return $this->db->get()->result_array();	
	}
}

  ?>