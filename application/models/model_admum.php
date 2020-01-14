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

    public function showalllaporan($id_laporan)
    {
        $this->db->where('idlapadmum', $id_laporan);
        $this->db->get('lap_admum')->row_array();
    }
    
}