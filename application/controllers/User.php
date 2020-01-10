<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
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

    // work tampilkan halaman index
    public function index()
    {
        $data['user'] = $this->db->get_where('tbl_users', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Pembelian';


        if ($data['user']['type_opr'] == 2) {
            $data['pag'] = $this->model_pembelian->getdatapembelianatrt();
        } else if ($data['user']['type_opr'] == 3) {
            $data['pag'] = $this->model_pembelian->getdatapembelianspbp();
        } else {
            $data['pag'] = $this->model_pembelian->getAlldatapembelian();
        }

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/index', $data);
        $this->load->view('templates/footer');
    }
    // end of tampilkan halaman index

    // WORK input pembelian
    public function input_pembelian()
    {
        $data['user'] = $this->db->get_where('tbl_users', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Tambah Pembelian Barang';
        $data['kategori'] = $this->model_kategori->showcategory();
        if ($data['user']['type_opr'] == 2) {
            $data['dtbrg'] = $this->model_mstDataBarang->getDataBrngAtRt();
        } else if ($data['user']['type_opr'] == 3) {
            $data['dtbrg'] = $this->model_mstDataBarang->getDataBrngSpBp();
        } else {
            $data['dtbrg'] = $this->model_mstDataBarang->getAllDataBrng();
        }

        // $this->form_validation->set_rules('no_dok', 'Nomor Dokumen', 'required');
        $this->form_validation->set_rules('kode_barang', 'Kode Barang', 'required');
        $this->form_validation->set_rules('nama_barang', 'Nama Barang', 'required');
        $this->form_validation->set_rules('qty', 'Banyaknya Barang', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            // $this->load->view('templates/topbar', $data);
            $this->load->view('user/input_pembelian', $data);
            $this->load->view('templates/footer');
        }
    }
    // end of input pembelian

    // ajax simpan item data pembelian 
    public function simpanItemDataPembelian()
    {
        $dataitempembelian = $this->input->post('isitableitembeli');
        $status = $this->model_pembelian->tambah_pembelian($dataitempembelian);
        $this->output->set_content_type('application/json');
        $datajson = json_encode(array('status' => $status));
        echo $datajson;
    }
    // akhir encode from ajax

    public function simpanItemDataPemakaian()
    {
        $dataItemPemakaian = $this->input->post('isitableitempakai');
        $status = $this->model_pemakaian->tambah_pemakaian($dataItemPemakaian);
        $this->output->set_content_type('application/json');
        $datajson = json_encode(array('status' => $status));
        echo $datajson;
    }





    // work tampilkan halaman PEmakaian
    public function pemakaian()
    {
        $data['user'] = $this->db->get_where('tbl_users', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Pemakaian';

        if (isset($_POST['pilihtanggal'])) {
            $tgl1 = $_POST['tgl1'];
            $tgl2 = $_POST['tgl2'];

            if ($data['user']['type_opr'] == 2) {
                $data['pag'] = $this->model_pemakaian->getdatapemakaianatrt($tgl1, $tgl2);
            } else if ($data['user']['type_opr'] == 3) {
                $data['pag'] = $this->model_pemakaian->getdatapemakaianbpsp();
            } else {
                $data['pag'] = $this->model_pemakaian->getAlldatapemakaianrange($tgl1, $tgl2);
            }
        } else {
            if ($data['user']['type_opr'] == 2) {
                $data['pag'] = $this->model_pemakaian->getdatapemakaianatrt();
            } else if ($data['user']['type_opr'] == 3) {
                $data['pag'] = $this->model_pemakaian->getdatapemakaianbpsp();
            } else {
                // $data['pag'] = $this->model_pemakaian->getAlldatapemakaian($tgl1,$tgl2);
                $data['pag'] = $this->model_pemakaian->getAlldatapemakaianbynow();
            }
        }


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/pemakaian', $data);
        $this->load->view('templates/footer');
    }
    // end of tampilkan halaman index


    // WORK input pemakaian
    public function input_pemakaian()
    {
        $data['user'] = $this->db->get_where('tbl_users', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Tambah Data Pemakaian';
        $data['departemen'] = $this->model_departemen->showdepartemen();
        $data['satuan'] = $this->satuan->showsatuan();

        if ($data['user']['type_opr'] == 2) {
            $data['dtbrg'] = $this->model_mstDataBarang->getDataBrngAtRt();
        } else if ($data['user']['type_opr'] == 3) {
            $data['dtbrg'] = $this->model_mstDataBarang->getDataBrngSpBp();
        } else {
            $data['dtbrg'] = $this->model_mstDataBarang->getAllDataBrng();
        }

        $this->form_validation->set_rules('departemen', 'Nama Departemen', 'required');
        $this->form_validation->set_rules('kode_barang', 'Nama Barang', 'required');
        $this->form_validation->set_rules('nama_barang', 'Nama Barang', 'required');
        $this->form_validation->set_rules('qty', 'Banyaknya Barang', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            // $this->load->view('templates/topbar', $data);
            $this->load->view('user/input_pemakaian', $data);
            $this->load->view('templates/footer');
        }
    }
    // end input pemakaian



    // WORK EXPORT pembelian
    public function exportpembelian()
    {
        $data =
            [
                "title" => "Laporan Persediaan | Pembelian Barang",
                "hasil" => $this->model_pembelian->getAllexportpembelian()
            ];
        $this->load->view('exporttoexcel/exporttoexcelpembelian', $data);
    }
    // end export




    // WORK EXPORT pemakaian
    public function exportpemakaian()
    {
        $data =
            [
                "title" => "Laporan Persediaan | Pemakaian Barang",
                "hasil" => $this->model_pemakaian->getAllexportpemakaian()
            ];

        $this->load->view('exporttoexcel/exporttoexcelpemakaian', $data);
    }
    // end export


    // WORK EXPORT stok
    public function exportstok()
    {
        $data =
            [
                "title" => "Laporan Persediaan | STOK Barang",
                "hasil" => $this->model_stok_barang->getAllexportstok()
            ];
        $this->load->view('exporttoexcel/exportstok', $data);
    }
    // end export







    public function saldo()
    {
        $data['user'] = $this->db->get_where('tbl_users', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Saldo';

        if ($data['user']['type_opr'] == 2) {
            $data['pag'] = $this->model_stok_barang->getDataStokatrt();
        } else if ($data['user']['type_opr'] == 3) {
            $data['pag'] = $this->model_stok_barang->getDataStokbpsp();
        } else {
            $data['pag'] = $this->model_stok_barang->getAllDataStok();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/stok', $data);
        $this->load->view('templates/footer');
    }



    // autocomplete
    public function autocomplete()
    {
        $returnData = array();
        $condition['searchTerm'] = $this->input->get('term');
        $getrow = $this->model_mstDataBarang->getRowDataBarang();
    }

    public function stb()
    {
        $data['user'] = $this->db->get_where('tbl_users', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Form STB';
        $data['tanggal'] = $this->input->post('caritanggal');
        $data['bagian'] = $this->input->post('departemen');
        // $query = $data['pag'];
        $data['departemen'] = $this->model_departemen->showdepartemen();
        if ($data['user']['type_opr'] == 2) {
            $data['pag'] = $this->model_pemakaian->cetakctbpemakaianatrt($data['tanggal'], $data['bagian']);
        } else if ($data['user']['type_opr'] == 3) {
            $data['pag'] = $this->model_pemakaian->cetakctbpemakaianbpsp($data['tanggal'], $data['bagian']);
        } else {
            $data['pag'] = $this->model_pemakaian->tampilkansemuapemakaian($data['tanggal'], $data['bagian']);
        }

        if (isset($_POST['cetak'])) {
            $this->load->view('templates/header', $data);
            $this->load->view('user/cetakstb', $data);
        } else {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/formstb', $data);
            $this->load->view('templates/footer');
        }
    }

    public function cetakstb()
    {
        $data['user'] = $this->db->get_where('tbl_users', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Form STB';

        $data['tanggal'] = $this->input->post('caritanggal');
        $data['bagian'] = $this->input->post('departemen');
        $data['pag'] = $this->model_pemakaian->tampilkansemuapemakaian($data['tanggal'], $data['bagian']);
        // $query = $data['pag'];
        $data['departemen'] = $this->model_departemen->showdepartemen();
        $this->load->view('templates/header', $data);
        $this->load->view('user/cetakstb', $data);
    }



    // edit pemakaian barang
    public function edit_pemakaian($id)
    {
        $data['user'] = $this->db->get_where('tbl_users', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Edit Pemakaian Barang';
        $data['bagian'] = $this->model_departemen->showdepartemen();
        $data['datapemakaian'] = $this->model_pemakaian->getDataPemakaianById($id);
        $data['satuan'] = $this->satuan->showsatuan();

        $this->form_validation->set_rules('kode_barang', 'Kode Barang', 'required');
        $this->form_validation->set_rules('nama_barang', 'nama_barang', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/editpemakaian', $data);
            $this->load->view('templates/footer');
        } else {
            $this->model_pemakaian->editpemakaian();
            $this->session->set_flashdata('flash', 'Di Ubah');
            redirect('user/pemakaian', 'refresh');
        }
    }
    // end of edir pemakaian barang

    // delete pemakaian dan menambahkan ke stok
    public function deletePemakaian($id)
    {
        $data['qtypemakaian'] = $this->model_pemakaian->getQtyDataPemakaianById($id);
        $data['qtystok'] = $this->model_pemakaian->getQtyDataPemakaianById($id);
        $this->load->view('user/deletepemakaian', $data);
    }
    // enf of delete pemakaian


    // fungsi menu roll paper
    public function rollpaper()
    {
        $data['user'] = $this->db->get_where('tbl_users', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Kertas Roll';
        $data['rollpaper'] = $this->rollpaper->showAllRollPaper();
        $data['jeniskertas'] = $this->rollpaper->jenisKertasWeb();
        $this->form_validation->set_rules('kode_roll', ' Kode Roll ', 'required');
        $this->form_validation->set_rules('jenis_kertas', 'Jenis Kertas', 'required');
        $this->form_validation->set_rules('weight', 'Berat Kertas', 'required');
        $this->form_validation->set_rules('tgl_masuk', 'Tanggal Masuk', 'required');
        if ($this->form_validation->run()  == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/rollpaper', $data);
            $this->load->view('templates/footer');
        } else {
            $this->rollpaper->tambahRollPaper();
            $this->session->set_flashdata('flash', 'ditambahkan');
            redirect('user/rollpaper');
        }
    }
    // end function rollpaper


}
