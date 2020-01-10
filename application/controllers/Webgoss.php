<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Webgoss extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_mstDataBarang');
        $this->load->model('model_pembelian');
        $this->load->model('model_pemakaian');
        $this->load->model('model_kategori');
        $this->load->model('model_stok_barang');
        $this->load->model('model_departemen');
        $this->load->model('model_satuan', 'satuan');
        $this->load->model('model_rollpaper', 'rollpaper');
        $this->load->library('form_validation');
    }
}
