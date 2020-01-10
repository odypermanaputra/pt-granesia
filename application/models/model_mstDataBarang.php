<?php

class model_mstDataBarang extends CI_model
{
	// WORK tampilkan semua isi tabel
	public function getAlldataBarang()
	{
		$this->db->order_by('nama_barang', 'ASC');
		return $this->db->get("master_data_barang")->result_array();
	}
	// end menamilkan semua isi data barang


	public function getAllShowAuto()
	{
		return $this->db->get("master_data_barang")->result_array();
	}

	public function getallexportmstDtBarang()
	{
		$this->db->order_by('nama_barang', 'ASC');
		return $this->db->get("master_data_barang")->result_array();
	}


	public function	caridata($keyword,$perpage, $offset)
	{
		$this->db->like('nama_barang', $keyword);
		$this->db->or_like('kode_barang', $keyword);
		return $this->db->get_where('master_data_barang')->result_array();
			
	}






 	// WORK edit data barang
	public function edit_dataMasterBarang()
	{
		$data = 
		[
			"kode_barang" => $this->input->post('kode_barang', true),
			"nama_barang" => $this->input->post('nama_barang', true),	
		];

		$this->db->where('id', $this->input->post('id'));
		$this->db->update('master_data_barang', $data);
	}
	// end edit data barang





	// WORK
	public function getDataBarangById($id)
	{
		return $this->db->get_where('master_data_barang', ['id' => $id])->row_array();
	}
	// end get data barang berdasarkan ID



	// WORK
	public function getRowDataBarang()
	{
		return $this->db->get('master_data_barang')->row_array();
	}
	// end get data barang berdasarkan ID





	// work delete data barang
	public function delete_dataMasterBarang($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('master_data_barang');
	}
	// end of delete data barang



	public function duplikasi()
	{
		$kode_barang = $this->input->post('kode_barang');
		$this->db->select('kode_barang');
		return $this->db->get_where('tbl_stok', ['kode_barang' => $kode_barang])->row_array();
	}


	// WORK tambah data
	public function tambah_databarang()
	{
		$data1 =
				[
					"kode_barang" => $this->input->post('kode_barang', true),
					"nama_barang" => $this->input->post('nama_barang', true),
					"kategori_id" => $this->input->post('kategori', true)
				];
		$this->db->insert('master_data_barang', $data1);
		$data2 =
				[
					"kode_barang" => $this->input->post('kode_barang', true),
					"nama_barang" => $this->input->post('nama_barang', true),
					"stok"			=> 0
				];
		$this->db->insert('tbl_stok', $data2);		
	}
	// work tambah data barang




	// cek jumlah data di database
	public function jumlah_data()
	{
		return $this->db->get('master_data_barang')->num_rows();
	}




	public function data($number,$offset)
	{
		return $query = $this->db->get('master_data_barang',$number,$offset)->result();
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

	public function cari($id)
	{
		return $this->db->get_where('master_data_barang', array('kode_barang' => $id));
	}


	public function getAllDataBrng()
	{
		return $this->db->get("master_data_barang")->result_array();
	}

	public function getDataBrngAtRt()
	{
		$this->db->like('kode_barang','at','after');
		$this->db->or_like('kode_barang','rt','after');
		return $this->db->get("master_data_barang")->result_array();
	}

	public function getDataBrngSpBp()
	{
		$this->db->like('kode_barang','sp','after');
		$this->db->or_like('kode_barang','bt','after');
		$this->db->or_like('kode_barang','br','after');
		$this->db->or_like('kode_barang','bp','after');
		$this->db->or_like('kode_barang','11','after');
		return $this->db->get("master_data_barang")->result_array();
	}

	public function kertassheet()
	{
		$this->db->like('nama_barang','AP','after');
		return $this->db->get("master_data_barang")->result_array();
	}

}
