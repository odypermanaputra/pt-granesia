<?php
defined('BASEPATH') or exit('No direct script access allowed');

class admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_mstDataBarang', 'mst_barang');
        $this->load->model('model_kategori');
        $this->load->model('model_departemen');
        $this->load->model('model_satuan');
        $this->load->model('model_supplier', 'supplier');
        $this->load->library('form_validation');
        $data['user'] = $this->db->get_where('tbl_users', ['email' => $this->session->userdata('email')])->row_array();
    }

    public function index()
    {
        // inisial user dan role user
        $data['user'] = $this->db->get_where('tbl_users', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Master Data Barang';
        $data['pag'] = $this->mst_barang->getAlldataBarang();
        $data['kategori'] = $this->model_kategori->showcategory();

        $this->form_validation->set_rules('kode_barang', 'Kode Barang', 'required');
        $this->form_validation->set_rules('nama_barang', 'Nama Barang', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/index', $data);
            $this->load->view('templates/footer');
        } else {
            $inputKodeBarang = $this->input->post('kode_barang');
            $result = $this->mst_barang->duplikasi();
            // if ($result->num_rows() > 1) {
            if ($result['kode_barang'] == $inputKodeBarang) {
                $this->session->set_flashdata('flash', '<div class="alert alert-warning" role="alert"><strong>Kode barang : <h6 class="text-danger"> ' . $inputKodeBarang . ' </h6> Sudah ada dalam database</strong></div>');
                redirect('admin/index');
            } else
            $this->mst_barang->tambah_databarang();
            $this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert"><strong>Data berhasil ditambahkan</strong></div>');
            redirect('admin');
        }
    }


    // WORK DELETE DATA
    public function delete_dataMasterBarang($id)
    {
        $this->mst_barang->delete_dataMasterBarang($id);
        $this->session->set_flashdata('flash', '<div class="alert alert-warning" role="alert"><strong>Data Barang Sudah Dihapus</strong></div>');
        redirect('admin');
    }
    // end delete data


    public function edit_dataMasterBarang($ida)
    {
        $data['user'] = $this->db->get_where('tbl_users', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Mengubah data master barang';
        $data['databarang'] = $this->mst_barang->getDataBarangById($ida);
        $this->form_validation->set_rules('kode_barang', 'Kode Barang', 'required');
        $this->form_validation->set_rules('nama_barang', 'Nama Barang', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/editDataBarang', $data);
            $this->load->view('templates/footer');
        } else {
            $this->mst_barang->edit_dataMasterBarang();
            $this->session->set_flashdata('flash', 'Di ubah');
            redirect('admin');
        }
    }


    // show the categori
    public function kategori()
    {
        $data['user'] = $this->db->get_where('tbl_users', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Master Data Kategori';
        $data['kategori'] = $this->model_kategori->showcategory();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('kategori/index', $data);
        $this->load->view('templates/footer');
    }
    // end show kategori




    // WORK show the departemen
    public function departemen()
    {
        $data['user'] = $this->db->get_where('tbl_users', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Master Data Departemen';
        $data['departemen'] = $this->model_departemen->showdepartemen();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('departemen/index', $data);
        $this->load->view('templates/footer');
    }
    // work end show departemmen


    // WORK show the satuan
    public function satuan()
    {
        $data['user'] = $this->db->get_where('tbl_users', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Master Data Satuan';
        $data['satuan'] = $this->model_satuan->showsatuan();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('satuan/index', $data);
        $this->load->view('templates/footer');
    }
    // work end show departemmen



    // fungsi untuk suppier
    public function supplier()
    {
        $data['user'] = $this->db->get_where('tbl_users', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Master Data Supplier';
        $data['supplier'] = $this->supplier->showsupplier();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('supplier/index', $data);
        $this->load->view('templates/footer');
    }
    // end supplier function

}
