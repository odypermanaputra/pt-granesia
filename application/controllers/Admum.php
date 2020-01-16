<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admum extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_mstDataBarang', 'databarang');
        $this->load->model('model_pembelian');
        $this->load->model('model_pemakaian');
        $this->load->model('model_kategori');
        $this->load->model('model_stok_barang');
        $this->load->model('model_departemen');
        $this->load->model('model_satuan', 'satuan');
        $this->load->model('model_rollpaper', 'rollpaper');
        $this->load->model('model_order', 'order');
        $this->load->model('model_mesin', 'mesin');
        $this->load->model('model_admum', 'admum');
        $data['user'] = $this->db->get_where('tbl_users', ['email' => $this->session->userdata('email')])->row_array();
    }
    public function index()
    {
         // inisial user dan role user
        $data['user'] = $this->db->get_where('tbl_users', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Laporan WEB GOSS';
        $data['showOrder'] = $this->order->showAllOrder();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('Admum/index', $data);
        $this->load->view('templates/footer');
    }

    public function lapdetail($idorder)
    {
        $data['user'] = $this->db->get_where('tbl_users', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Laporan Detail WEB GOSS';
        $data['showOrderbyID'] = $this->order->showOrderById($idorder);
        $data['rollpaper'] = $this->rollpaper->showAllRollPaper();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('Admum/detillaporan', $data);
        $this->load->view('templates/footer');
    }

    public function savealllaporanadmum()
    {
        $this->admum->savelaporan();
        $this->rollpaper->updatesisaroll();
    }

    public function laporan()
    {
        $data['user'] = $this->db->get_where('tbl_users', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Laporan Cetak';
        $data['showlaporan'] = $this->order->showalllaporan();
        // $data['showOrderbyID'] = $this->order->showOrderById();
        // $data['rollpaper'] = $this->rollpaper->showAllRollPaper();
        // $data['laporan'] = $this->rollpaper->showalllaporan();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('Admum/laporan', $data);
        $this->load->view('templates/footer');
    }

    public function laporacetak($id_laporan)
    {
        
        $data['user'] = $this->db->get_where('tbl_users', ['email' => $this->session->userdata('email')])->row_array();
        $data['laporan'] = $this->admum->showalllaporan($id_laporan);
        // $data['laporan'] = $id_laporan;
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('Admum/laporancetak', $data);
        $this->load->view('templates/footer');
    }
}