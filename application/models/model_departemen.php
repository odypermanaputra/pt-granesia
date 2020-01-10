<?php

class model_departemen extends CI_model
{

	// work menampilkan semua data departemen
	public function showdepartemen()
	{
		return $this->db->get('tbl_departemen')->result_array();
	}
	// end menampilkan data departemen



	// work edit departemen
	public function editDepartemen()
	{
		$data =
		[
			"nama_departemen" => $this->input->post('departemen', true)
		];
		$this->db->where('id',  $this->input->post('id'));
		$this->db->update('tbl_departemen', $data);
	}
	// end edit departemen



	// get id departemen
	public function getDepartemenByID($id)
	{
		return $this->db->get_where('tbl_departemen', ['id' => $id])->row_array();
	}
	// end get id departeemn





	// work delete data departemen
	public function delete_departemen($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('tbl_departemen');
	}
	// end of delete departemen


	// work menambahkan kategori
	public function tambahdepartemen()
	{
		$data =
		[
			"nama_departemen" => $this->input->post('departemen', true)			
		];
		$this->db->insert('tbl_departemen', $data);
	}
	// end menambahkan kategori





}