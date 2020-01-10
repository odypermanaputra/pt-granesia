<?php

class model_mstDataBarang extends CI_model
{
	public function getAlldataBarang()
	{
		$this->db->order_by('nama_barang', 'ASC');
		$this->db->select('*');
		$this->db->FROM('master_data_barang');
		$hasil = $this->db->get();
		return $hasil;
	}

	public function limitshow($perpage,$offset)
	{
		return $this->db->get('master_data_barang',$perpage,$offset)->result();
		$hal = 1;
		$indeks = 0;
		$limit = 10;
		$alldata = $this->db->get();

		$row_count = $alldata->num_rows();
		$query = $this->db->get($indeks,$limit);

	}
 
	public function edit_dataMasterBarang()
	{
		$data = 
		[
			"kode_barang" => $this->input->post('kode_barang', true),
			"nama_barang" => $this->input->post('nama_barang', true),	
		];

		$this->db->where('id',  $this->input->post('id'));
		$this->db->update('master_data_barang', $data);
	}



	public function getDataBarangById($id)
	{
		return $this->db->get_where('master_data_barang', ['id' => $id])->row_array();
	}



	// work delete data barang
	public function delete_dataMasterBarang($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('master_data_barang');
	}
	// end of delete data barang



	// WORK tambah data
	public function tambah_databarang()
	{
		$data =
		[
			"kode_barang" => $this->input->post('kode_barang', true),
			"nama_barang" => $this->input->post('nama_barang', true)
		];
		$this->db->insert('master_data_barang', $data);
	}
	// work tambah data barang
}

?>