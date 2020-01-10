<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kategori extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_kategori');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['user'] = $this->db->get_where('tbl_users', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Master data kategori';
		$data['kategori'] = $this->model_kategori->showcategory();
		$this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('kategori/index', $data);
        $this->load->view('templates/footer');
	}

	public function edit_kategori($idkat)
	{    
		// echo json_encode($this->model_kategori->getKategoriByID($_POST['id']));
		$data['user'] = $this->db->get_where('tbl_users', ['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Edit Kategori';
        $data['kategori'] = $this->model_kategori->getKategoriByID($idkat);

        
        $this->form_validation->set_rules('kategori', 'Kategori', 'required');

        if ($this->form_validation->run() == FALSE) 
        {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('kategori/editKategori', $data);
            $this->load->view('templates/footer');
        } else {
            $this->model_kategori->editKategori();
            $this->session->set_flashdata('flash', 'di Ubah');
            redirect('admin/kategori');
        }
        
	}

	public function tambahkategori()
	{
		$data['user'] = $this->db->get_where('tbl_users', ['email' => $this->session->userdata('email')])->row_array();
		$data['judul'] = 'Master data kategori';
		$data['kategori'] = $this->model_kategori->showcategory();
		$this->form_validation->set_rules('kategori', 'Kategori', 'required');
		$kategori = $this->input->post('kategori');
		if ($this->input->post('kategori') == 0)
		{
			?>
			<script type="text/javascript">
				alert('DATA BELUM DITAMBAHKAN');
			</script>
			<?php
			base_url('admin/kategori');
		} 
		if ($this->form_validation->run() == FALSE) 
        {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('kategori/index', $data);
            $this->load->view('templates/footer');
        } else {
            $this->model_kategori->tambahKategori();
            $this->session->set_flashdata('flash', 'ditambahkan');
            redirect('admin/kategori');
        }
	}

	public function delete_kategori($id)
    {
        $this->model_kategori->delete_kategori($id);
        $this->session->set_flashdata('flash', 'DiHapus');
        redirect('admin/kategori');
    }
    // end delete data


}

?>