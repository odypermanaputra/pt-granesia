<?php

class kategori extends CI_Model
{
	public function getAllkategori()
	{
		return $this->db->get('kategori')->result_array();
	}
}

?>