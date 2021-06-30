<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Survey_ctrl extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Survey_model');
		if (!$this->session->userdata('email')) {
			redirect('Login/Auth');
		}
	}

	public function index()
	{
		// $srv = $this->Survey_model->select_task();
		// $data = array('srv' => $srv,);

		// $this->load->view('Admin/Header');
		// $this->load->view('Admin/Survey/Data_survey', $data);
		// $this->load->view('Admin/Footer');
	}

	public function data_survey()
	{
		$srv = $this->Survey_model->select_task();
		$data = array('srv' => $srv,);

		$this->load->view('Admin/Header');
		$this->load->view('Admin/Survey/Data_survey', $data);
		$this->load->view('Admin/Footer');
	}
}
