<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Auth_m');
	}

	public function index()
	{
		is_not_logged_in();
		$data = [
			'title' => 'log in',
		];

		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[5]');
		if ($this->form_validation->run() == false) {
			$this->load->view('login_v', $data);
		} else {
			$this->_login();
		}
	}

	private function _login()
	{
		$email = htmlspecialchars($this->input->post('email'), ENT_QUOTES);
		$password = htmlspecialchars($this->input->post('password'), ENT_QUOTES);
		// $user = $this->db->get_where('admin_users', ['email' => $email])->row();
		$user = $this->Auth_m->login($email)->row();
		// var_dump($user);
		// die;
		if ($user) {
			if (password_verify($password, $user->password)) {
				$data = [
					'id' => $user->id,
					'email' => $user->email,
					'nama' => $user->nama
				];
				$this->session->set_userdata($data);
				// echo '<pre>';
				// print_r($this->session->userdata('nama'));
				// die;
				redirect('dashboard');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    Email/Password salah!
                    </div>');
				redirect('auth');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
			Email tidak terdaftar!
			</div>');
			redirect('auth');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Done!</strong> Anda telah keluar!</div>');
		redirect('auth');
	}
}
