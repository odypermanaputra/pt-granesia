<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ppc extends CI_Controller
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
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('tbl_users', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Order';
        $data['kertasWeb'] = $this->rollpaper->jenisKertasWeb();
        $data['databarang'] = $this->databarang->kertassheet();
        $data['mesinwebs'] = $this->mesin->showAllWeb();
        $data['mesinsheets'] = $this->mesin->showAllSheet();
        $data['order'] = $this->order->showAllOrder();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('ppc/index', $data);
        $this->load->view('templates/footer');
    }

    public function estimasi()
    {
        $data['user'] = $this->db->get_where('tbl_users', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Estimasi PPC';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('ppc/index', $data);
        $this->load->view('templates/footer');
    }

    

    public function tambahOrder()
    {
        $data['user'] = $this->db->get_where('tbl_users', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Order';
        $data['kertasWeb'] = $this->rollpaper->jenisKertasWeb();
        $data['databarang'] = $this->databarang->kertassheet();
        $data['mesinwebs'] = $this->mesin->showAllWeb();
        $data['mesinsheets'] = $this->mesin->showAllSheet();

        $this->form_validation->set_rules('no_order', 'NOMOR ORDER', 'required');
        $this->form_validation->set_rules('tgl_masuk_order', 'Tanggal Masuk Order', 'required');
        $this->form_validation->set_rules('nama_pelanggan', 'Nama Pelanggan', 'required');
        $this->form_validation->set_rules('alamat_pelanggan', 'Alamat', 'required');
        $this->form_validation->set_rules('jenis_pekerjaan', 'Jenis Pekerjaan', 'required');
        
        $this->form_validation->set_rules('ukuran_jadi', 'Ukuran jadi', 'required');
        $this->form_validation->set_rules('oplah', 'Oplah', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('ppc/order', $data);
            $this->load->view('templates/footer');
        } else {
            $this->order->tambahOrder();
            $this->session->set_flashdata('flash', 'ditambahkan');
            redirect('Ppc');
        }
    }

    public function detail_order($idorder)
    {
        $data['user'] = $this->db->get_where('tbl_users', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Detail Order';
        $data['orderbyId'] = $this->order->showOrderById($idorder);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('ppc/detailOrder', $data);
        $this->load->view('templates/footer');
    }
}