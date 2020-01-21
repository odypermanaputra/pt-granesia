<?php

class model_rollpaper extends CI_model
{
    // tampilkan semua data roll yang ada pada table
    public function showAllRollPaper()
    {
        $this->db->select('tb_jenis_kertas.id_jkertasroll,tb_jenis_kertas.jenis_kertas,tbl_kertasroll.*');
        $this->db->from('tb_jenis_kertas');
        $this->db->join('tbl_kertasroll', 'tbl_kertasroll.jenis_kertas_id=tb_jenis_kertas.id_jkertasroll');
        return $this->db->get()->result_array();
    }
    // end function show all roll paper

    // tampilkan jenis kertas roll web
    public function jenisKertasWeb()
    {
        return $this->db->get('tb_jenis_kertas')->result_array();
    }
    // akhir menampilkan kertas roll web

    // tambah kertas roll ke db
    public function tambahRollPaper()
    {
        $data = [
            'tgl_input' =>  $this->input->post('tgl_input'),
            'tgl_masuk' => $this->input->post('tgl_masuk'),
            'no_dokumen' => $this->input->post('no_dokumen'),
            'kode_roll' => $this->input->post('kode_roll'),
            'jenis_kertas_id' => $this->input->post('jenis_kertas'),
            'weight' => $this->input->post('weight'),
            'sisa' => $this->input->post('weight'),
            'operator' => $this->input->post('username')
        ];
        $this->db->insert('tbl_kertasroll', $data);
    }
    // end function tambah roll

    public function showRollPaperbyId($id)
    {
        return $this->db->get_where('tbl_kertasroll', ['id' => $id])->row_array();
    }


    // edit untuk roll paper
    public function editHargaRollPaper()
    {
        $data =
            [
                "tgl_input"         => $this->input->post('tgl_input', true),
                "tgl_masuk"         => $this->input->post('tgl_masuk', true),
                "no_dokumen"         => $this->input->post('no_dokumen', true),
                "kode_roll"         => $this->input->post('kode_roll', true),
                "jenis_kertas_id"   => $this->input->post('jenis_kertas_id', true),
                "weight"            => $this->input->post('weight', true),
                "harga"             => $this->input->post('harga', true),
                "tgl_update"        => $this->input->post('tgl_update', true)
            ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('tbl_kertasroll', $data);
    }
    // end function edit harga roll paper

    public function updatesisaroll()
    {
        $koderoll = $this->input->post('kode_roll');
        $data = [
            'sisa' => $this->input->post('berat_sisa_roll')
        ];
        $this->db->where('kode_roll', $koderoll);
        $this->db->update('tbl_kertasroll', $data);
    }
}