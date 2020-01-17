<?php

class model_admum extends CI_Model
{
    public function savelaporan()
    {
        $data = [
            'no_order'=> $this->input->post('no_order'),
            'id_mesinweb'=> $this->input->post('id_mesinweb'),
            'velt'=> $this->input->post('velt'),
            'tgl_cetak_web'=> $this->input->post('tgl_cetak_web'),
            'jml_plate'=> $this->input->post('jml_plate'),
            'pasang_plate_web'=> $this->input->post('pasang_plate_web'),
            'mulai_cetak_web'=> $this->input->post('mulai_cetak_web'),
            'selesai_cetak_web'=> $this->input->post('selesai_cetak_web'),
            'insit'=> $this->input->post('insit'),
            'speed'=> $this->input->post('speed'),
            'nomorator_web'=> $this->input->post('nomorator_web'),
            'avel'=> $this->input->post('avel'),
            'waste'=> $this->input->post('waste'),
            'kode_roll'=> $this->input->post('kode_roll'),
            'pemakaian_roll'=> $this->input->post('pemakaian_roll'),
            'berat_sisa_roll'=> $this->input->post('berat_sisa_roll'),
            'web_cyan'=> $this->input->post('web_cyan'),
            'web_magenta'=> $this->input->post('web_magenta'),
            'web_yellow'=>$this->input->post('web_yellow'),
            'web_black'=> $this->input->post('web_black')
        ];
        $this->db->insert('lap_admum', $data);
    }

    public function showalllaporan($show_lap)
    {
        $this->db->select('*');
        $this->db->from('lap_admum');
        $this->db->join('tbl_mesinweb','tbl_mesinweb.idmesinweb=lap_admum.id_mesinweb');
        $this->db->join('tbl_order','tbl_order.no_order=lap_admum.no_order');
        $this->db->join('tb_jenis_kertas','tb_jenis_kertas.id_jkertasroll=tbl_order.bahan_isi');
        $this->db->where('lap_admum.no_order', $show_lap);
        return $this->db->get()->result_array();
    }
    
}