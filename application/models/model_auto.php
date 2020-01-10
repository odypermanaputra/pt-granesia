<?php

class model_auto extends CI_model
{

	public function get_auto($kode_barang)
	{
		$this->db->like('kode_barang', $kode_barang, 'BOTH');
		$this->db->order_by('kode_barang', 'ASC');
		return $this->db->get('master_data_barang')->result_array();
	}

	public function get_autonama($nama_barang)
	{
		$this->db->like('nama_barang', $nama_barang, 'BOTH');
		$this->db->order_by('nama_barang', 'ASC');
		return $this->db->get('master_data_barang')->result_array();
	}

	public function tampilkansemuadata()
	{
		return $this->db->get('master_data_barang');
	}

	public function cari($kode_barang)
	{
		$this->db->select('tbl_stok.*,tbl_satuan.*');
		$this->db->from('tbl_stok');
		$this->db->join('tbl_satuan', 'tbl_satuan.id=tbl_stok.satuan_id');
		$this->db->where('kode_barang', $kode_barang);
		return $this->db->get()->result_array();
	}

	public function carisupplier($supplier)
	{
		return $this->db->get_where('supplier', ['supplier' => $supplier])->result_array();
	}

	public function carirollpaper($koderoll)
	{
		$this->db->select('tb_jenis_kertas.id_jkertasroll,tb_jenis_kertas.jenis_kertas,tb_jenis_kertas.weight_as_selongsong,tbl_kertasroll.*');
        $this->db->from('tb_jenis_kertas');
		$this->db->join('tbl_kertasroll', 'tbl_kertasroll.jenis_kertas_id=tb_jenis_kertas.id_jkertasroll');
		$this->db->where('kode_roll', $koderoll);
		return $this->db->get()->result_array();
	}
}