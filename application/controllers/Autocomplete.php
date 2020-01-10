<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class autocomplete extends CI_Controller
{
	public function __construct()
    {
        parent::__construct();
        $this->load->model('model_mstDataBarang'); 
        $this->load->model('model_kategori');
        $this->load->model('model_departemen');
        $this->load->model('model_auto');

        $this->load->library('form_validation');
        $data['user'] = $this->db->get_where('tbl_users', ['email' => $this->session->userdata('email')])->row_array();
    }


    public function index()
    {
    	$data['dtbrg'] = $this->model_auto->tampil_data();
    }

	public function autocomplete()
	{
		if (isset($_GET['term'])){
			$result = $this->model_auto->get_auto($_GET['term']);
			if (count($result) > 0) {
				foreach ($result as $row) 
					$result_array[] = $row->kode_barang;						
					echo json_encode($result_array);
			}
		}
	}



	public function autocompnamabarang()
	{
		if (isset($_GET['term']))
		{
			$result = $this->model_auto->get_autonama($_GET['term']);
			if (count($result) > 0) 
			{
				foreach ($result as $row) 
					$result_array[] = $row->kode_barang;						
					echo json_encode($result_array);
			}
		}
	}


	public function cari()
	{
		$kode_barang = $_GET['kode_barang'];
		$cari = $this->model_auto->cari($kode_barang);
		echo json_encode($cari);
	}

	public function carisupplier()
	{
		$supplier = $_GET['supplier'];
		$carisupplier = $this->model_auto->carisupplier($supplier);
		echo json_encode($carisupplier);
	}
}