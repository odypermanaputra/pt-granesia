<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Supplier extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_supplier', 'supplier');
        $this->load->library('form_validation');
    }

    public function index()
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

    public function tambahsupplier()
    {
        $data['user'] = $this->db->get_where('tbl_users', ['email' => $this->session->userdata('email')])->row_array();
        $data['kategori'] = $this->model_kategori->showcategory();
        $this->form_validation->set_rules('supplier', 'Supplier', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('supplier/index', $data);
            $this->load->view('templates/footer');
        } else {
            $this->supplier->tambahSupplier();
            $this->session->set_flashdata('flash', 'ditambahkan');
            redirect('admin/Supplier');
        }
    }

    public function edit_supplier($idsupp)
    {
         $data['user'] = $this->db->get_where('tbl_users', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = "Edit Data Supplier";
        $data['supplier'] = $this->supplier->showsupplierbyid($idsupp);
        $this->form_validation->set_rules('supplier', 'Supplier', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('supplier/edit_supplier', $data);
            $this->load->view('templates/footer');
        } else {
            $this->supplier->editSupplier();
            $this->session->set_flashdata('flash', 'di Ubah');
            redirect('admin/Supplier');
        }
    }

    public function delete_supplier($id)
    {
        $this->supplier->deleteSupplier($id);
        $this->session->set_flashdata('flash', 'di Hapus');
        redirect('admin/Supplier');
     }
}
