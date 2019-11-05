<?php
/**
* 
*/
class Arsip_model extends CI_model{
	
	public function getAllArsip()
	{
		return $this->db->get('surat_masuk')->result_array();
	}

	public function tambahDataArsip()
	{
		$data = [
		"nomor_surat" => $this->input->post('nomor_surat', true),
		"asal_surat" => $this->input->post('asal_surat', true),
		"perihal" => $this->input->post('perihal', true),
		"ringkasan" => $this->input->post('ringkasan', true),
		"tanggal" => $this->input->post('tanggal', true),
		"upload_file" => $this->input->post('upload_file', true)
		];

		$this->db->insert('surat_masuk', $data);
	}


	public function hapusDataArsip($id)
	{
		$this->db->where('id_surat', $id);
		$this->db->delete('surat_masuk', ['id_surat' => $id]);
	}

	public function getArsipById($id)
	{
		return $this->db->get_where('surat_masuk', ['id_surat'=>$id])->row_array();
	}

	public function ubahDataArsip($id)
	{
		$data = [
		"id_surat" => $this->input->post('id_surat', true),
		"nomor_surat" => $this->input->post('nomor_surat', true),
		"asal_surat" => $this->input->post('asal_surat', true),
		"perihal" => $this->input->post('perihal', true),
		"ringkasan" => $this->input->post('ringkasan', true),
		"tanggal" => $this->input->post('tanggal', true),
		"upload_file" => $this->input->post('upload_file', true)
		];

		$this->db->where('id_surat', $this->input->post('id_surat'));
		$this->db->update('surat_masuk', $data);
	}

	public function get_arsip_keyword($keyword)
	{
		$this->db->select('*');
		$this->db->from('surat_masuk');
		if (!empty($ringkasan)){
			$this->db->like('perihal', $keyword);
			$this->db->or_like('asal_surat', $keyword);
			return $this->db->get()->result_array();
		}
	}

	public function edaran(){
		$this->db->select('*');
		$this->db->from('surat_masuk');
		$this->db->like('perihal', 'Edaran');
		return $this->db->get()->result_array();
	}

	public function pemberitahuan(){
		$this->db->select('*');
		$this->db->from('surat_masuk');
		$this->db->like('perihal', 'pemberitahuan');
		return $this->db->get()->result_array();
	}

	public function pengadaan(){
		$this->db->select('*');
		$this->db->from('surat_masuk');
		$this->db->like('perihal', 'pengadaan');
		return $this->db->get()->result_array();
	}

	public function pengantar(){
		$this->db->select('*');
		$this->db->from('surat_masuk');
		$this->db->like('perihal', 'pengantar');
		return $this->db->get()->result_array();
	}

	public function pengumuman(){
		$this->db->select('*');
		$this->db->from('surat_masuk');
		$this->db->like('perihal', 'pengumuman');
		return $this->db->get()->result_array();
	}

	public function permintaan(){
		$this->db->select('*');
		$this->db->from('surat_masuk');
		$this->db->like('perihal', 'permintaan');
		return $this->db->get()->result_array();
	}

	public function permohonan(){
		$this->db->select('*');
		$this->db->from('surat_masuk');
		$this->db->like('perihal', 'permohonan');
		return $this->db->get()->result_array();
	}

	public function undangan(){
		$this->db->select('*');
		$this->db->from('surat_masuk');
		$this->db->like('perihal', 'undangan');
		return $this->db->get()->result_array();
	}
}