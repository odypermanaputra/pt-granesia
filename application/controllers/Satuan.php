<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Satuan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_satuan');
		$this->load->library('form_validation');
	}


	public function index()
	{
		$data['user'] = $this->db->get_where('tbl_users', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Master data Satuan';
		$data['satuan'] = $this->model_satuan->showsatuan();
		$this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
	}


	public function edit_satuan($idsat)
	{    
		// echo json_encode($this->model_kategori->getKategoriByID($_POST['id']));
		$data['user'] = $this->db->get_where('tbl_users', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Edit Satuan';
        $data['satuan'] = $this->model_satuan->getSatuanByID($idsat);

        
        $this->form_validation->set_rules('satuan', 'Satuan', 'required');

        if ($this->form_validation->run() == FALSE) 
        {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('satuan/edit_satuan', $data);
            $this->load->view('templates/footer');
        } else {
            $this->model_satuan->editSatuan();
            $this->session->set_flashdata('flash', 'Di ubah');
            redirect('admin/satuan');
        }
        
	}


	public function delete_satuan($id)
	{
		$this->model_satuan->delete_satuan($id);
        $this->session->set_flashdata('flash', 'DiHapus');
        redirect('admin/satuan');
	}


	public function tambahsatuan()
	{
		$data['user'] = $this->db->get_where('tbl_users', ['email' => $this->session->userdata('email')])->row_array();
		// $data['judul'] = 'Tambah Departemen';
		$data['satuan'] = $this->model_satuan->showsatuan();
		$this->form_validation->set_rules('satuan', 'Nama satuan', 'required');
		$satuan = $this->input->post('satuan');
		if ($this->input->post('satuan') == 0)
		{
			?>
			<script type="text/javascript">
				alert('DATA BELUM DITAMBAHKAN');
			</script>
			<?php
			base_url('admin/satuan');
		} 
		if ($this->form_validation->run() == FALSE) 
        {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('satuan/index', $data);
            $this->load->view('templates/footer');
        } else {
            $this->model_satuan->tambahsatuan();
            $this->session->set_flashdata('flash', 'ditambahkan');
            redirect('admin/satuan');
        }
	}




}