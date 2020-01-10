<?php

class model_mesin extends CI_model
{
    public function showAllWeb()
    {
        return $this->db->get('tbl_mesinweb')->result_array();
    }

    public function showAllSheet()
    {
        return $this->db->get('tbl_mesinsheet')->result_array();
    }
}