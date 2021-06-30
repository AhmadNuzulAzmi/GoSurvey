<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Registrasi extends CI_Controller
{



	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}
	public function index()
	{

		$this->load->view('awal/Beranda');
	}

	public function login()
	{
		$data['title'] = 'Login';
		$this->load->view('Login/login', $data);
	}
	public function register()
	{
		$this->form_validation->set_rules('name', 'Name', 'required|trim');
		$this->form_validation->set_rules('pass', 'Password', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[pengguna.email_pgn]');


		if ($this->form_validation->run() == false) {

			$data['title'] = 'Registrasi';
			$this->load->view('Login/Registrasi', $data);
		} else {
			$data = [
				'nama_pgn' => $this->input->post('name'),
				'jk_pgn' => $this->input->post('jk'),
				'nohp_pgn' => $this->input->post('nohp'),
				'alamat_pgn' => $this->input->post('alamat'),
				'sts_pgn' => "USER",
				'email_pgn' => $this->input->post('email'),
				'pass_pgn' => $this->input->post('pass')



			];

			$this->db->insert('pengguna', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
  Congratulation! your account has been created. Please Login
</div>');
			redirect('Login/login');
		}
	}

	public function home($nama = 'Azmi')
	{
		echo "Halaman Home " . $nama;
	}
}
