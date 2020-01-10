<?php

class model_satuan extends CI_model
{
	public function showsatuan()
	{
		return $this->db->get('tbl_satuan')->result_array();
	}

	// work menambahkan satuan
	public function tambahsatuan()
	{
		$data =
		[
			"satuan" => $this->input->post('satuan', true)			
		];
		$this->db->insert('tbl_satuan', $data);
	}
	// end menambahkan satuan

	public function delete_satuan($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('tbl_satuan');
	}


	public function getSatuanByID($id)
	{
		return $this->db->get_where('tbl_satuan', ['id' => $id])->row_array();
	}

	public function editSatuan()
	{
		$data =
		[
			"satuan" => $this->input->post('satuan', true)
		];
		$this->db->where('id',  $this->input->post('id'));
		$this->db->update('tbl_satuan', $data);
	
	}
}