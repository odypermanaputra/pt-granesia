<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Akuntansi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_mstDataBarang');
        $this->load->model('model_pembelian');
        $this->load->model('model_pemakaian');
        $this->load->model('model_kategori');
        $this->load->model('model_stok_barang', 'stok');
        $this->load->model('model_departemen');
        $this->load->model('model_satuan', 'satuan');
        $this->load->model('model_pemesanan_barang', 'orderPO');
        $this->load->model('model_supplier', 'supplier');
        $this->load->model('model_rollpaper', 'rollpaper');
        $this->load->library('form_validation');
    }

    // work tampilkan halaman index (pembelian barang)
    public function index()
    {
        $data['user'] = $this->db->get_where('tbl_users', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Pembelian (Akuntan)';
        // $data_pembelian = $this->db->get('tbl_pembelian');
        $data['pag'] = $this->model_pembelian->getAlldatapembelian();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('akuntan/index', $data);
        $this->load->view('templates/footer');
    }
    // end of tampilkan halaman index (pembelian barang )



    // controller menampilkan pemakian untuk akuntansi
    public function pemakaian()
    {
        $data['user'] = $this->db->get_where('tbl_users', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Pemakaian (Akuntan)';
        $data['pag'] = $this->model_pemakaian->getAlldatapemakaian();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('akuntan/pemakaian', $data);
        $this->load->view('templates/footer');
    }
    // end of controller menampilkan pemakian untuk akuntansi

    // controller untuk mengedit pembelian bagian akuntansi
    public function editPembelian($id)
    {
        $data['user'] = $this->db->get_where('tbl_users', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Edit Pembelian Barang';
        $data['dataPembelian'] = $this->model_pembelian->getPembelianById($id);
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
        $this->form_validation->set_rules('no_dok', 'Nomor Dokumen', 'required');
        $this->form_validation->set_rules('kode_barang', 'Kode Barang', 'required');
        $this->form_validation->set_rules('nama_barang', 'Nama Barang', 'required');
        $this->form_validation->set_rules('qty', 'Banyaknya Barang', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('akuntan/editPembelian', $data);
            $this->load->view('templates/footer');
        } else {
            $this->model_pembelian->Editpembelian();
            $this->session->set_flashdata('flash', 'di ubah');
            if ($data['user']['type_opr'] == 1) {
                $this->session->set_flashdata('flash', 'Di Ubah');
                redirect('Akuntansi');
            }
        }
    }
    // end controller untuk mengedit pembelian

    // controller delete pembelian
    public function deletePembelian($id)
    {
        $data['idPembelian'] = $this->model_pembelian->getPembelianById($id);
        $data['kode_barang'] = $data['idPembelian']['kode_barang'];
        $data['qtyPembelian'] = $data['idPembelian']['qty'];
        $data['kodeBarangdiStok'] = $this->stok->getDataStokByKodeBarang($data['kode_barang']);
        $data['kode_barang_stok'] = $data['kodeBarangdiStok']['kode_barang'];
        $data['stok'] = $data['kodeBarangdiStok']['stok'];

        // ketika di delete kembalikan nilai stok dengan cara mengurangi stok dengan kuantiti barang
        $data['nilai_stok'] = $data['stok'] - $data['qtyPembelian'];
        $this->stok->PenguranganStok($data['kode_barang'], $data['nilai_stok']);
        $this->model_pembelian->deletepembelian($id);
        $data['user'] = $this->db->get_where('tbl_users', ['email' => $this->session->userdata('email')])->row_array();

        if ($data['user']['type_opr'] == 1) {
            $this->session->set_flashdata('flash', 'Dihapus, Cek kembali Stok dalam menu Stok Barang.');
            redirect('Akuntansi');
        }
    }
    // controler delete pembelian

    // controller untuk mengedit pemakaian untuk bagian akuntansi
    public function editPemakaian($id)
    {
        $data['user'] = $this->db->get_where('tbl_users', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Edit Pemakaian Barang';
        $data['dataPemakaian'] = $this->model_pemakaian->getDataPemakaianById($id);
        $data['departemen'] = $this->model_departemen->showdepartemen();
        $data['satuan'] = $this->satuan->showsatuan();


        $this->form_validation->set_rules('tgl_dok', 'Tanggal', 'required');
        $this->form_validation->set_rules('no_dok', 'Nomor Dokumen', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('akuntan/editPemakaian', $data);
            $this->load->view('templates/footer');
        } else {
            $this->model_pemakaian->editpemakaian();
            $this->session->set_flashdata('flash', 'di ubah');
            if ($data['user']['type_opr'] == 1) {
                $this->session->set_flashdata('flash', ' Di Ubah');
                redirect('Akuntansi/pemakaian');
            }
        }
    }
    // end controller untuk mengedit pemakaian akuntansi


    public function deletePemakaian($id)
    {
        $data['idPemakaian'] = $this->model_pemakaian->getDataPemakaianById($id);
        $data['kode_barang'] = $data['idPemakaian']['kode_barang'];
        $data['qtyPemakaian'] = $data['idPemakaian']['qty'];
        $data['kodeBarangdiStok'] = $this->stok->getDataStokByKodeBarang($data['kode_barang']);
        $data['kode_barang_stok'] = $data['kodeBarangdiStok']['kode_barang'];
        $data['stok'] = $data['kodeBarangdiStok']['stok'];
        $data['id'] = $id;

        // ketika di delete kembalikan nilai stok dengan cara menambahkan stok dengan kuantiti barang yang di pakai (return nilai)
        $data['nilai_stok'] = $data['stok'] + $data['qtyPemakaian'];
        $this->stok->PenambahanStok($data['kode_barang'], $data['nilai_stok']);
        $this->model_pemakaian->deletepemakaian($id);
        $data['user'] = $this->db->get_where('tbl_users', ['email' => $this->session->userdata('email')])->row_array();

        if ($data['user']['type_opr'] == 1) {
            $this->session->set_flashdata('flash', ' Dihapus, Cek kembali Stok dalam menu Stok Barang.!!!');
            redirect('Akuntansi/pemakaian');
        }
    }

    // controller insert pemesanan barang
    public function insertpemesananbarang()
    {
        $datalistitem = $this->input->post('isitabel');
        $status = $this->orderPO->insertpemesananbarang($datalistitem);
        $this->output->set_content_type('application/json');
        echo json_encode(array('status' => $status));
    }
    // end of inser pemesanan barang 

    // work tampilkan halaman pemesanan barang
    public function pemesanan()
    {
        $data['user'] = $this->db->get_where('tbl_users', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Pemesanan';
        $data['pag'] = $this->orderPO->showAllpemesanan();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('akuntan/pemesanan', $data);
        $this->load->view('templates/footer');
    }
    // end of tampilkan halaman pemesanan barang

    // form untuk input pemesanan
    public function formpemesanan()
    {
        $data['user'] = $this->db->get_where('tbl_users', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Pemesanan Barang';
        $data['satuan'] = $this->satuan->showsatuan();
        $data['supplier'] = $this->supplier->showsupplier();

        if ($data['user']['type_opr'] == 2) {
            $data['dtbrg'] = $this->model_mstDataBarang->getDataBrngAtRt();
        } else if ($data['user']['type_opr'] == 3) {
            $data['dtbrg'] = $this->model_mstDataBarang->getDataBrngSpBp();
        } else {
            $data['dtbrg'] = $this->model_mstDataBarang->getAllDataBrng();
        }

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('akuntan/formpesanbarang', $data);
        $this->load->view('templates/footer');
    }

    // simpan pemesanan barang
    public function savepemesananbarang()
    {
        return $this->orderPO->insertpemesanan();
    }
    // end function save pemesana barang


    // tampilkan item berdasarkan PO
    public function showItemByPO()
    {
        $this->orderPO->showItemByPo();
    }
    // end function


    // cetak pemesanan barang berdasarkan PO
    public function cetakpo()
    {
        $data['judul'] = 'CETAK PO';
        $this->load->view('templates/header', $data);
        $segmen3 = $this->uri->segment(3);
        $segmen4 = $this->uri->segment(4);
        $segmen5 = $this->uri->segment(5);
        $segmen6 = $this->uri->segment(6);
        $segmen = $segmen3 . '/' . $segmen4 . '/' . $segmen5 . '/' . $segmen6;
        $data['pesanan'] = $this->orderPO->showitempemesanan($segmen);
        // var_dump($data['pesanan']);
        if ($data['pesanan'][0]['nopo'] == "") {
            redirect('akuntansi/pemesanan', 'refresh');
        } else {
            $this->load->view('akuntan/cetakpo', $data);
        }
    }
    // end method cetak PO

    // menampilkan detail pemesanan barang
    public function detailpemesanan()
    {
        $data['user'] = $this->db->get_where('tbl_users', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Detail Pemesanan Barang';
        $data['satuan'] = $this->satuan->showsatuan();
        $segmen3 = $this->uri->segment(3);
        $segmen4 = $this->uri->segment(4);
        $segmen5 = $this->uri->segment(5);
        $segmen6 = $this->uri->segment(6);
        $segmen = $segmen3 . '/' . $segmen4 . '/' . $segmen5 . '/' . $segmen6;
        $data['pesanan'] = $this->orderPO->showitempemesanan($segmen);

        if (isset($data['pesanan']) == "") {
            var_dump($data['pesanan']);
            die;
        } else {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('akuntan/detailpesanan', $data);
            $this->load->view('templates/footer');
        }
    }
    // akhir  fungsi  detail pemesnan barang


    // delete item barang dari pemesanan berdasarkan PO
    public function deleteitempo($nopo)
    {
        $segmen3 = $this->uri->segment(3);
        $segmen4 = $this->uri->segment(4);
        $segmen5 = $this->uri->segment(5);
        $segmen6 = $this->uri->segment(6);
        $segmen = $segmen3 . '/' . $segmen4 . '/' . $segmen5 . '/' . $segmen6;
        $this->orderPO->deleteitempo($segmen);
        $this->session->set_flashdata('flash', '<div class="alert alert-warning" role="alert"><strong>Pemesanan Barang Sudah Dihapus</strong></div>');
        redirect('akuntansi/detailpemesanan');
    }
    // akhir method hapus item barang berdasarkan nomor PO 

    // method delete pemesanan PO berdasarkan nomor PO
    public function deletepo($nopo)
    {
        $segmen3 = $this->uri->segment(3);
        $segmen4 = $this->uri->segment(4);
        $segmen5 = $this->uri->segment(5);
        $segmen6 = $this->uri->segment(6);
        $segmen = $segmen3 . '/' . $segmen4 . '/' . $segmen5 . '/' . $segmen6;
        $this->orderPO->delete_po($segmen);
        $this->session->set_flashdata('flash', '<div class="alert alert-warning" role="alert"><strong>Pemesanan Barang Sudah Dihapus</strong></div>');
        redirect('akuntansi/pemesanan');
    }
    // akhir method hapus PO


    // verifikasi pembelian
    public function setverifikasi($id)
    {
        $this->model_pembelian->setver($id);
        $this->session->set_flashdata('flash', 'Di Verifikasi');
        redirect('Akuntansi/index');
    }
    // end verifikasi pembelian

    public function akSaldo()
    {
        $data['user'] = $this->db->get_where('tbl_users', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Saldo Persediaan';

        if ($data['user']['type_opr'] == 2) {
            $data['pag'] = $this->stok->getDataStokatrt();
        } else if ($data['user']['type_opr'] == 3) {
            $data['pag'] = $this->stok->getDataStokbpsp();
        } else {
            $data['pag'] = $this->stok->getAllDataStok();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('akuntan/akstok', $data);
        $this->load->view('templates/footer');
    }

    // untuk input harga roll paper
    public function akRollPaper()
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
            $this->load->view('Akuntan/ak_rollpaper', $data);
            $this->load->view('templates/footer');
        } else {
            $this->rollpaper->tambahRollPaper();
            $this->session->set_flashdata('flash', 'ditambahkan');
            redirect('Akuntansi/rollpaper');
        }
    }
    // end controler akuntansi input harga

    public function editKertasRoll($idkertas)
    {
        $data['user'] = $this->db->get_where('tbl_users', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Input Harga Kertas ROll';

        $data['rollpaperbyId'] = $this->rollpaper->showRollPaperbyId($idkertas);
        $data['jeniskertas'] = $this->rollpaper->jenisKertasWeb();

        $this->form_validation->set_rules('kode_roll', ' Kode Roll ', 'required');
        $this->form_validation->set_rules('jenis_kertas_id', 'Jenis Kertas', 'required');
        $this->form_validation->set_rules('weight', 'Berat Kertas', 'required');
        $this->form_validation->set_rules('tgl_masuk', 'Tanggal Masuk', 'required');
        $this->form_validation->set_rules('harga', 'Harga', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('akuntan/V_editKertasRoll', $data);
            $this->load->view('templates/footer');
        } else {
            $this->rollpaper->editHargaRollPaper();
            $this->session->set_flashdata('flash', 'di ubah');
            redirect('Akuntansi/rollpaper');
        }
    }


    // untuk input harga roll paper
    public function akSaldoRoll()
    {
        $data['user'] = $this->db->get_where('tbl_users', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Saldo Kertas Roll';
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
            $this->load->view('Akuntan/akSaldoRollpaper', $data);
            $this->load->view('templates/footer');
        }
        // else {
        //     $this->rollpaper->tambahRollPaper();
        //     $this->session->set_flashdata('flash', 'ditambahkan');
        //     redirect('Akuntansi/rollpaper');
        // }
    }
    // end controler akuntansi Saldo Rollpaper



}
