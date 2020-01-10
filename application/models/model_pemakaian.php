<?php

class model_pemakaian extends CI_model
{
	public function tambah_pemakaian($dataItemPemakaian)
	{
		for ($i = 0; $i < count($dataItemPemakaian); $i++) {
			$itemPakai[] = array(
				"tgl_input"		=> $dataItemPemakaian[$i]['tgl_input'],
				"no_dok"		=> $dataItemPemakaian[$i]['no_dok'],
				"tgl_dok" 		=> $dataItemPemakaian[$i]['tgl_dok'],
				"departemen"	=> $dataItemPemakaian[$i]['bagian'],
				"kode_barang" 	=> $dataItemPemakaian[$i]['kode_barang'],
				"nama_barang" 	=> $dataItemPemakaian[$i]['nama_barang'],
				"ket_barang"	=> $dataItemPemakaian[$i]['keterangan'],
				"qty"			=> $dataItemPemakaian[$i]['qty'],
				"satuan"		=> $dataItemPemakaian[$i]['satuan'],
				"hrg_satuan"	=> 0,
				"jumlah"		=> 0,
				"keterangan"	=> $dataItemPemakaian[$i]['keterangan'],
				"tgl_update"	=> 0,
				"user"			=> $dataItemPemakaian[$i]['user']
			);
		}
		try {
			for ($i = 0; $i < count($dataItemPemakaian); $i++) {
				$this->db->insert('tbl_pemakaian', $itemPakai[$i]);
			}
			return "success";
		} catch (Exception $e) {
			return "failed";
		}
	}

	// tampilkan berdasarkan tanggal 1 dan 2
	public function getAlldatapemakaianrange($tgl1 = "", $tgl2 = "")
	{
		// $tgl = date("d-m-Y");
		// $tgl_now = date('Y-m-d');
		// $show_tgl = date('Y m');
		$this->db->where('tgl_dok BETWEEN "' . date('Y-m-d', strtotime($tgl1)) . '"AND"' . date('Y-m-d', strtotime($tgl2)) . '"');
		$this->db->order_by('tgl_dok DESC,id DESC');
		return $this->db->get_where('tbl_pemakaian')->result_array();
	}
	// end function menampilkan berdasarkan tanggal

	// tampilkan data dari tgl1 dan tgl2 untuk bagian rt dan atk
	public function getdatapemakaianatrtrange($tgl1="", $tgl2="")
	{
		$this->db->order_by('tgl_dok DESC,id desc');
		$this->db->like('kode_barang', 'at', 'after');
		$this->db->or_like('kode_barang', 'rt', 'after');
		$this->db->where('tgl_dok BETWEEN "' . date('Y-m-d', strtotime($tgl1)) . '"AND"' . date('Y-m-d', strtotime($tgl2)) . '"');
		return $this->db->get_where('tbl_pemakaian')->result_array();
	}
	// end function menampilkan berdasarkan tanggal

	public function getAlldatapemakaian()
	{
		$this->db->order_by('tgl_dok DESC,id DESC');
		return $this->db->get('tbl_pemakaian')->result_array();
	}

	public function getAlldatapemakaianbynow()
	{
		$tgl = date("Y-m-d");
		// $tgl_now = date('Y-m-d');
		// $show_tgl = date('Y m');
		$this->db->where('tgl_input', $tgl);
		$this->db->order_by('tgl_dok DESC,id DESC');
		return $this->db->get_where('tbl_pemakaian')->result_array();
	}
	// 


	// 
	public function getdatapemakaianatrt()
	{
		// $tgl = date("d-m-Y");
		$this->db->order_by('tgl_dok DESC,id desc');
		$this->db->like('kode_barang', 'at', 'after');
		$this->db->or_like('kode_barang', 'rt', 'after');
		return $this->db->get('tbl_pemakaian')->result_array();
	}
	// 

	// 
	public function getdatapemakaianbpsp()
	{
		// $tgl = date("d-m-Y");
		$this->db->order_by('tgl_dok DESC,id DESC');
		$this->db->like('kode_barang', 'sp', 'after');
		$this->db->or_like('kode_barang', 'bt', 'after');
		$this->db->or_like('kode_barang', 'br', 'after');
		$this->db->or_like('kode_barang', 'bp', 'after');
		$this->db->or_like('kode_barang', '11', 'after');
		return $this->db->get('tbl_pemakaian')->result_array();
	}
	// 


	public function getAllexportpemakaian()
	{
		$this->db->order_by('nama_barang', 'ASC');
		return $this->db->get('tbl_pemakaian')->result_array();
	}



	public function jumlah_data_pemakaian()
	{
		return $this->db->get('tbl_pemakaian')->num_rows();
	}

	public function caridata($keyword)
	{
		$this->db->like('nama_barang', $keyword);
		$this->db->or_like('kode_barang', $keyword);
		$this->db->or_like('departemen', $keyword);
		return $this->db->get_where('tbl_pemakaian')->result_array();
	}

	// 
	public function tampilkansemuapemakaian($tanggal, $bagian)
	{
		// $tgl = $this->input->post($tanggal);
		$this->db->select("*");
		$this->db->where('tgl_dok', $tanggal);
		$this->db->where('departemen', $bagian);
		// return $this->db->get_where('tbl_pemakaian', array('tgl_dok' => $tgl),$perpage, $offset)->result_array();
		return $this->db->get_where('tbl_pemakaian')->result_array();
	}
	//

	public function getDataPemakaianById($id)
	{
		return $this->db->get_where('tbl_pemakaian', ['id' => $id])->row_array();
	}

	public function editpemakaian()
	{
		$id = $this->input->post('id');
		$data =
			[
				"tgl_input"		=> $this->input->post('tgl_input', true),
				"no_dok" 		=> $this->input->post('no_dok', true),
				"tgl_dok"		=> $this->input->post('tgl_dok', true),
				"departemen"	=> $this->input->post('departemen', true),
				"kode_barang" 	=> $this->input->post('kode_barang', true),
				"nama_barang" 	=> $this->input->post('nama_barang', true),
				"ket_barang" 	=> $this->input->post('ket_barang'),
				"qty"			=> $this->input->post('qty', true),
				"satuan"		=> $this->input->post('satuan', true),
				"hrg_satuan"	=> $this->input->post('hrg_satuan', true),
				"jumlah"		=> $this->input->post('jumlah', true),
				"keterangan"	=> $this->input->post('keterangan'),
				"tgl_update"	=> $this->input->post('tgl_update', true)
			];
		$this->db->where('id', $id);
		$this->db->update('tbl_pemakaian', $data);
	}

	public function deletepemakaian($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('tbl_pemakaian');
	}

	public function getQtyDataPemakaianById($id)
	{
		$this->db->select('qty, kode_barang');
		$this->db->from('tbl_pemakaian');
		$this->db->where('id', $id);
		return $this->db->get()->row_array();
	}

	public function cetakctbpemakaianatrt($tanggal, $bagian)
	{
		$this->db->where('tgl_dok', $tanggal);
		$this->db->where('departemen', $bagian);
		$this->db->like('kode_barang', 'at', 'after');
		$this->db->or_like('kode_barang', 'rt', 'after');
		return $this->db->get_where('tbl_pemakaian')->result_array();
	}

	public function cetakctbpemakaianbpsp($tanggal, $bagian)
	{
		$this->db->where('tgl_dok', $tanggal);
		$this->db->where('departemen', $bagian);
		$this->db->like('kode_barang', 'sp', 'after');
		$this->db->or_like('kode_barang', 'bt', 'after');
		$this->db->or_like('kode_barang', 'br', 'after');
		$this->db->or_like('kode_barang', 'bp', 'after');
		$this->db->or_like('kode_barang', '11', 'after');

		return $this->db->get_where('tbl_pemakaian')->result_array();
	}
}
