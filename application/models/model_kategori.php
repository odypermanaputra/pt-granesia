<?php

class model_kategori extends CI_model
{

	//  menampilkan semua data kategori
	public function showcategory()
	{
		return $this->db->get('tbl_kategori')->result_array();
	}

	// end menampilkan semua kategori



	// work menambahkan kategori
	public function tambahKategori()
	{
		$data =
		[
			"kategori" => $this->input->post('kategori', true)			
		];
		$this->db->insert('tbl_kategori', $data);
	}
	// end menambahkan kategori




	// work delete data kategori
	public function delete_kategori($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('tbl_kategori');
	}
	// end of delete kategori

	
	// work edit kategori
	public function editKategori()
	{
		$data =
		[
			"kategori" => $this->input->post('kategori', true)
		];
		$this->db->where('id',  $this->input->post('id'));
		$this->db->update('tbl_kategori', $data);
	}
	// work edit kategori



	// work get id kategori
	public function getKategoriByID($id)
	{
		return $this->db->get_where('tbl_kategori', ['id' => $id])->row_array();
	}
	// end get id kategori
	
}