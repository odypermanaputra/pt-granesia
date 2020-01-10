<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Departemen extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_departemen');
		$this->load->library('form_validation');
	}


	public function index()
	{
		$data['user'] = $this->db->get_where('tbl_users', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Master data Departemen';
		$data['departemen'] = $this->model_departemen->showDepartemen();
		$this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
	}


	public function edit_departemen($iddep)
	{    
		// echo json_encode($this->model_kategori->getKategoriByID($_POST['id']));
		$data['user'] = $this->db->get_where('tbl_users', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Edit Departemen';
        $data['departemen'] = $this->model_departemen->getDepartemenByID($iddep);

        
        $this->form_validation->set_rules('departemen', 'Departemen', 'required');

        if ($this->form_validation->run() == FALSE) 
        {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('departemen/editDepartemen', $data);
            $this->load->view('templates/footer');
        } else {
            $this->model_departemen->editDepartemen();
            $this->session->set_flashdata('flash', 'Di ubah');
            redirect('admin/departemen');
        }
        
	}


	public function delete_departemen($id)
	{
		$this->model_departemen->delete_departemen($id);
        $this->session->set_flashdata('flash', 'DiHapus');
        redirect('admin/departemen');
	}


	public function tambahdepartemen()
	{
		$data['user'] = $this->db->get_where('tbl_users', ['email' => $this->session->userdata('email')])->row_array();
		$data['judul'] = 'Tambah Departemen';
		$data['departemen'] = $this->model_departemen->showdepartemen();
		$this->form_validation->set_rules('departemen', 'Nama Departemen', 'required');
		$kategori = $this->input->post('departemen');
		if ($this->input->post('departemen') == 0)
		{
			?>
			<script type="text/javascript">
				alert('DATA BELUM DITAMBAHKAN');
			</script>
			<?php
			base_url('admin/departemen');
		} 
		if ($this->form_validation->run() == FALSE) 
        {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('departemen/index', $data);
            $this->load->view('templates/footer');
        } else {
            $this->model_departemen->tambahdepartemen();
            $this->session->set_flashdata('flash', 'ditambahkan');
            redirect('admin/departemen');
        }
	}
}