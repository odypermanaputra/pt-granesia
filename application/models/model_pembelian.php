<?php

class model_pembelian extends CI_model
{
	// 
	public function getAlldatapembelian()
	{
	
		$this->db->order_by('verifikasi', 'ASC');
		$this->db->order_by('tanggal', 'DESC');
		return $this->db->get('tbl_pembelian')->result_array();
	}
	// 


	// tampilkan semua pembelian untuk akunting
	public function getAlldatapembelianbyVerifikasi()
	{
		$tgl = date("d-m-Y");
		$this->db->order_by('tanggal', 'DESC');
		$this->db->where('verifikasi', 0);
		return $this->db->get_where('tbl_pembelian')->result_array();
	}
	// akhir fungsi menampilkan pembelian untuk akunting

	// 
	public function getdatapembelianatrt()
	{
		$tgl = date("d-m-Y");
		$this->db->order_by('tanggal', 'DESC');
		$this->db->like('kode_barang', 'at', 'after');
		$this->db->or_like('kode_barang', 'rt', 'after');
		return $this->db->get('tbl_pembelian')->result_array();
	}
	// 

	public function getdatapembelianspbp()
	{
		$tgl = date("d-m-Y");
		$this->db->order_by('tgl_input', 'DESC');
		$this->db->like('kode_barang', 'sp', 'after');
		$this->db->or_like('kode_barang', 'bt', 'after');
		$this->db->or_like('kode_barang', 'br', 'after');
		$this->db->or_like('kode_barang', 'bp', 'after');
		$this->db->or_like('kode_barang', '11', 'after');
		return $this->db->get('tbl_pembelian')->result_array();
	}
	//



	public function getAllexportpembelian()
	{
		$this->db->order_by('nama_barang', 'ASC');
		return $this->db->get('tbl_pembelian')->result_array();
	}


	public function tambah_pembelian($dataitemPembelian)
	{
		for ($i = 0; $i < count($dataitemPembelian); $i++) {
			$itemBeli[] = array(
				"tgl_input"		=> $dataitemPembelian[$i]['tgl_input'],
				"tanggal" 		=> $dataitemPembelian[$i]['tanggal'],
				"no_dok" 		=> $dataitemPembelian[$i]['no_dok'],
				"kode_barang" 	=> $dataitemPembelian[$i]['kode_barang'],
				"nama_barang" 	=> $dataitemPembelian[$i]['nama_barang'],
				"keterangan" 	=> $dataitemPembelian[$i]['keterangan'],
				"qty"			=> $dataitemPembelian[$i]['qty'],
				"hrg_satuan"	=> $dataitemPembelian[$i]['hrg_satuan'],
				"jumlah"		=> $dataitemPembelian[$i]['jumlah'],
				"tgl_update"	=> $dataitemPembelian[$i]['tgl_update'],
				"verifikasi"	=> $dataitemPembelian[$i]['verifikasi'],
				"user"			=> $dataitemPembelian[$i]['username']
			);
		}
		try {
			for ($i = 0; $i < count($dataitemPembelian); $i++) {
				$this->db->insert('tbl_pembelian', $itemBeli[$i]);
			}
			return 'success';
		} catch (Exception $e) {
			return 'failed';
		}
	}

	public function jumlah_data_pembelian()
	{
		return $this->db->get('tbl_pembelian')->num_rows();
	}

	public function	caridata($keyword)
	{
		$this->db->like('nama_barang', $keyword);
		$this->db->or_like('kode_barang', $keyword);
		$this->db->or_like('tanggal', $keyword);
		$this->db->or_like('no_dok', $keyword);
		return $this->db->get_where('tbl_pembelian')->result_array();
	}

	public function getPembelianById($id)
	{
		$this->db->select('*');
		return $this->db->get_where('tbl_pembelian', ['id' => $id])->row_array();
	}

	public function Editpembelian()
	{
		$id = $this->input->post('id');
		$data =
			[
				"tgl_input"		=> $this->input->post('tgl_input', true),
				"tanggal" 		=> $this->input->post('tanggal', true),
				"no_dok" 		=> $this->input->post('no_dok', true),
				"kode_barang" 	=> $this->input->post('kode_barang', true),
				"nama_barang" 	=> $this->input->post('nama_barang', true),
				"keterangan" 	=> $this->input->post('keterangan', true),
				"kategori" 		=> $this->input->post('kategori', true),
				"qty"			=> $this->input->post('qty', true),
				"hrg_satuan"	=> $this->input->post('hrg_satuan', true),
				"jumlah"		=> $this->input->post('jumlah', true),
				"tgl_update"	=> $this->input->post('tgl_update', true)
			];
		$this->db->where('id', $id);
		$this->db->update('tbl_pembelian', $data);
	}


	public function deletepembelian($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('tbl_pembelian');
	}

	public function setver()
	{
		$id = $this->input->post('id');
		$verifikasi = 1;
		$data = [
			'verifikasi' => $verifikasi
		];
		$this->db->where('id', $id);
		$this->db->update('tbl_pembelian', $data);
	}
}
