<?php

class model_stok_barang extends CI_model
{
	// 
	public function getAllDataStok()
	{
		$null = 0;
		$this->db->select('tbl_stok.*,tbl_satuan.*');
		$this->db->from('tbl_stok');
		$this->db->join('tbl_satuan', 'tbl_satuan.id=tbl_stok.satuan_id');
		$this->db->order_by('nama_barang', 'ASC');
		$this->db->where('stok !=', '$null');
		return $this->db->get()->result_array();
	}
	// 


	public function getDataStokatrt()
	{
		$null = 0;
		$this->db->order_by('nama_barang', 'ASC');
		$this->db->where('stok !=', '$null');
		$this->db->like('kode_barang', 'at', 'after');
		$this->db->or_like('kode_barang', 'rt', 'after');
		return $this->db->get('tbl_stok')->result_array();
	}
	// 


	public function getDataStokbpsp()
	{
		$null = 0;
		$this->db->order_by('nama_barang', 'ASC');
		$this->db->where('stok !=', '$null');
		$this->db->like('kode_barang', 'sp', 'after');
		$this->db->or_like('kode_barang', 'bt', 'after');
		$this->db->or_like('kode_barang', 'br', 'after');
		$this->db->or_like('kode_barang', 'bp', 'after');
		$this->db->or_like('kode_barang', '11', 'after');
		return $this->db->get('tbl_stok')->result_array();
	}
	// 


	public function getStok()
	{
		$null = 0;
		$this->db->order_by('nama_barang', 'ASC');
		$this->db->where('stok !=', '$null');
		return $this->db->get('tbl_stok')->result_array();
	}
	// 

	public function recordcount()
	{
		return $this->db->get('tbl_stok')->num_rows();
	}

	public function	caridata($keyword, $perpage, $offset)
	{
		$this->db->like('nama_barang', $keyword);
		$this->db->or_like('kode_barang', $keyword);
		$this->db->or_like('stok', $keyword);
		$this->db->or_like('kategori', $keyword);
		return $this->db->get_where('tbl_stok')->result_array();
	}

	public function getAllexportstok()
	{
		$this->db->order_by('nama_barang', 'ASC');
		return $this->db->get('tbl_stok')->result_array();
	}

	public function getDataStokByKodeBarang($kodebarang)
	{
		return $this->db->get_where('tbl_stok', ['kode_barang' => $kodebarang])->row_array();
	}

	public function PenguranganStok($kode_barang, $qty)
	{
		$this->db->set('stok', $qty);
		$this->db->where('kode_barang', $kode_barang);
		$this->db->update('tbl_stok');
	}

	public function PenambahanStok($kode_barang, $qty)
	{
		$this->db->set('stok', $qty);
		$this->db->where('kode_barang', $kode_barang);
		$this->db->update('tbl_stok');
	}
}
