<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class auth extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->library('email');
	}

	public function index()
	{
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_emails|valid_email');		
		$this->form_validation->set_rules('password', 'Password', 'required|trim');		
		if ($this->form_validation->run() == false){
			$data['judul'] = "Aplikasi Persediaan";
			$this->load->view('templates/auth_header' , $data);
			$this->load->view('auth/login');
			$this->load->view('templates/auth_footer');
		} else {
			$this->privLogin();
		}
	}

	private function privLogin()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$query = $this->db->get_where('tbl_users', ['email' => $email])->row_array();
		
		if ($query)
		{
			if ($query['is_active'] == 1){
				if(password_verify($password, $query['password'])){
					$data = [
						'email' => $query['email'],
						'full_name' => $query['name'],
						'image' => $query['image'],
						'role_id' => $query['role_id']
					];
					$this->session->set_userdata($data);
					if ($query['role_id'] == 1){
						redirect('Admin');
					} 
					if ($query['role_id'] == 2){
						redirect('User');
					}
					if ($query['role_id'] == 3){
						redirect('Akuntansi');
					} 
					if ($query['role_id'] == 4){
						redirect('Ppc');
					} 
					if ($query['role_id'] == 5){
						redirect('Admum');
					}
					
					
				}else{
					$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
					Password tidak sesuai !!
					</div>');
					redirect('auth');
				}

			} else {
				$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
					Account belum di aktivasi !!
				</div>');
				redirect('auth');
			}
		} else {
			$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">
			Account tidak ada !!
		  </div>');
		  redirect('auth');
		}
	}

	public function registrasi()
	{
		$this->form_validation->set_rules('name', 'Name', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_emails|valid_email|is_unique[tbl_users.email]');
		$this->form_validation->set_rules('pass1', 'Password', 'required|trim|min_length[6]|matches[pass2]');
		$this->form_validation->set_rules('pass2', 'Password', 'required|trim|matches[pass1]');

		if ( $this->form_validation->run() == false )
		{
			$data['judul'] = "Registrasi user";
			$this->load->view('templates/auth_header', $data);
			$this->load->view('auth/registrasi');
			$this->load->view('templates/auth_footer');
		} else {
			$data = [
				'name' => htmlspecialchars($this->input->post('name', true)),
				'email' => htmlspecialchars($this->input->post('email', true)),
				'image' => 'default.jpg',
				'password' => password_hash($this->input->post('pass1'), PASSWORD_DEFAULT),
				'role_id' => 2,
				'is_active' => 0,
				'date_created' => time()
			];

			$this->db->insert('tbl_users', $data);
			$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
			Account berhasil dibuat, silahkan aktivasi dulu ya!
		  </div>');
			redirect('auth');  
		}
	}

	public function forgot_password()
	{
		$data['judul'] = "Lupa Password";
		$this->load->view('templates/auth_header' , $data);
		$this->load->view('auth/forgot_password');
		$this->load->view('templates/auth_footer');
	}



	public function logout()
	{
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('password');
		$this->session->unset_userdata('role_id');
		$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Anda berhasil keluar dari sistem!</div>');
			redirect('auth');
	}
}