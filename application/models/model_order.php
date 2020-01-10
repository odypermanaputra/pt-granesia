<?php

class model_order extends CI_model
{

    public function showAllOrder()
    {
        $this->db->select('*');
        $this->db->from('tbl_order');
        $this->db->join('master_data_barang', 'master_data_barang.kode_barang=tbl_order.bahan_cover');
        $this->db->join('tb_jenis_kertas', 'tb_jenis_kertas.id_jkertasroll=tbl_order.bahan_isi');
        return $this->db->get()->result_array();
    }

    public function tambahOrder()
    {
        $data =
            [
                "no_order"          => $this->input->post('no_order', true),
                "tgl_masuk_order"   => $this->input->post('tgl_masuk_order', true),
                "nama_pelanggan"    => $this->input->post('nama_pelanggan', true),
                "alamat_pelanggan"  => $this->input->post('alamat_pelanggan', true),
                "jenis_pekerjaan"   => $this->input->post('jenis_pekerjaan', true),
                "bahan_cover"       => $this->input->post('bahan_cover', true),
                "bahan_isi"         => $this->input->post('bahan_isi', true),
                "ukuran_jadi"       => $this->input->post('ukuran_jadi', true),
                "oplah"             => $this->input->post('oplah', true),
                "mesinsheet_id"     => $this->input->post('mesincover_id', true),
                "mesinweb_id"       => $this->input->post('mesin_isi', true),
                "katern_isi"        => 0,
                "operator"          => $this->input->post('username', true)
            ];
        $this->db->insert('tbl_order', $data);
    }

    public function showOrderById($idorder)
    {
        $this->db->select('tbl_order.*,tbl_mesinweb.*,tb_jenis_kertas.*');
        $this->db->from('tbl_order');
        $this->db->join('tbl_mesinweb','tbl_mesinweb.idmesinweb=tbl_order.mesinweb_id');
        $this->db->join('tb_jenis_kertas', 'tb_jenis_kertas.id_jkertasroll=tbl_order.bahan_isi');
        $this->db->where('id_order' , $idorder);
        return $this->db->get()->row_array();
    }
}