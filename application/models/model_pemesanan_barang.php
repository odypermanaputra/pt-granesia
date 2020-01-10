<?php

class model_pemesanan_barang extends CI_model
{
	public function insertitembarang()
	{

		$data = [
			'nopo' 			=> $this->input->post('nomorpemesanan'),
			'nama_barang' 	=> $this->input->post('nama_barang'),
			'qty' 			=> $this->input->post('kuantitas'),
			'satuan' 		=> $this->input->post('satuan'),
			'estimasiharga' => $this->input->post('estimasiHarga'),
			'tgl_created' 	=> $this->input->post('date_created')
		];
		$this->db->insert('tbl_itempemesanan', $data);
	}


	public function showAllpemesanan()
	{
		return $this->db->get('tbl_pemesanan')->result_array();
	}

	public function showitempemesanan($segmen)
	{
		$this->db->select('tbl_pemesanan.*,tbl_itempemesanan.*');
		$this->db->from('tbl_pemesanan');
		$this->db->join('tbl_itempemesanan', 'tbl_itempemesanan.nopo=tbl_pemesanan.nopo', 'inner');
		$this->db->where('tbl_itempemesanan.nopo', $segmen);
		return $this->db->get()->result_array();
	}

	public function showItemByPo($nopo)
	{
		return $this->db->get_where('tbl_itempemesanan', ['nopo' => '01/GA-GRA/08/2019'])->result_array();
	}

	public function insertpemesanan()
	{
		$data = [
			'nopo' 			=> $this->input->post('nomorpemesanan'),
			'kepada'		=> $this->input->post('kepada'),
			'alamat'		=> $this->input->post('alamat'),
			'kota'			=> $this->input->post('kota'),
			'date_created'	=> $this->input->post('date_created'),
			'jangkawaktu'	=> $this->input->post('jangkawaktu'),
			'lama'			=> $this->input->post('lama'),
			'ppn'			=> $this->input->post('ppn')
		];
		$query = $this->db->insert('tbl_pemesanan', $data);
		$result = $this->db->affected_rows($query);
		if ($result > 0) {
			return 'seccess';
		}
	}

	public function insertpemesananbarang($data_list)
	{
		for ($i = 0; $i < count($data_list); $i++) {
			$data[] = array(
				'nopo' 			=> $data_list[$i]['nomorpemesanan'],
				'kode_barang' 	=> $data_list[$i]['kode_barang'],
				'nama_barang' 	=> $data_list[$i]['nama_barang'],
				'isi' 			=> $data_list[$i]['isi'],
				'satuanisi' 	=> $data_list[$i]['satuanisi'],
				'qty' 			=> $data_list[$i]['kuantitas'],
				'satuan' 		=> $data_list[$i]['satuan'],
				'estimasiharga' => $data_list[$i]['estimasiharga'],
				'jumlah'		=> $data_list[$i]['jumlah'],
				'tgl_created' 	=> $data_list[$i]['date_created']
			);
		}
		try {
			// insert data per baris ke database
			for ($i = 0; $i < count($data_list); $i++) {
				$this->db->insert('tbl_itempemesanan', $data[$i]);
			}
			return 'success';
		} catch (Exeption $e) {
			return 'failed';
		}
	}

	public function deleteitempo($id)
	{
		$this->db->where('Id', $id);
		$this->db->delete('tbl_itempemesanan');
	}

	public function delete_po($id)
	{
		$this->db->where('nopo', $id);
		$this->db->delete('tbl_pemesanan');
	}
}
