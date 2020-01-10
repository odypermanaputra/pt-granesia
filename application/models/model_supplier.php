<?php

class model_supplier extends CI_model

{
	public function showsupplier()
	{
		return $this->db->get('supplier')->result_array();
	}

	public function showsupplierbyid($id)
	{
		return $this->db->get_where('supplier', ['Id' => $id])->row_array();
	}

	public function tambahSupplier()
	{
		$data =
			[
				"supplier" => $this->input->post('supplier', true),
				"alamat" => $this->input->post('alamat', true),
				"kodepos" => $this->input->post('kodepos', true),
				"kota" => $this->input->post('kota', true),
				"telp" => $this->input->post('telp', true),
				"fax" => $this->input->post('fax', true),
				"email" => $this->input->post('email', true)
			];
		$this->db->insert('supplier', $data);
	}

	public function editSupplier()
	{
		$id = $this->input->post('id');
		$data = [
			"supplier" => $this->input->post('supplier', true),
			"alamat" => $this->input->post('alamat', true),
			"kodepos" => $this->input->post('kodepos', true),
			"kota" => $this->input->post('kota', true),
			"telp" => $this->input->post('telp', true),
			"fax" => $this->input->post('fax', true),
			"email" => $this->input->post('email', true)
		];
		$this->db->where('Id', $id);
		$this->db->update('supplier', $data);
	}

	public function deleteSupplier($id)
	{
		$this->db->where('Id', $id);
		$this->db->delete('supplier');
	}
}
