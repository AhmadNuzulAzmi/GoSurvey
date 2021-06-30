<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Setting_ctrl extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Pgn_model');
		if (!$this->session->userdata('email')) {
			redirect('Login/Auth');
		}
	}

	public function index()
	{

		$this->load->view('Admin/Header');
		$this->load->view('Admin/Setting/Set_Saldo');
		$this->load->view('Admin/Footer');
	}
}
