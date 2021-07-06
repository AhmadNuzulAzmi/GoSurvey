<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_ctrl extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('SurveyAdmin_model');
		$this->load->library('form_validation');
		if (!$this->session->userdata('email')) {
			redirect('Login/Auth');
		}
	}

	public function index()
	{
		$dataa = array(
			'title'  => 'GoSurvey/Dashboard - Admin',
			'user'   => $this->db->get_where('tbl_user', ['email_usr' => $this->session->userdata('email')])->row_array()
		);

		$data = array(
			'jml_user' => $this->SurveyAdmin_model->jml_user($dataa['user']['id_usr']),
			'dompet' => $this->SurveyAdmin_model->saldo($dataa['user']['id_usr']),
			'jml_task' => $this->SurveyAdmin_model->jml_task(),
			'jml_taskdone' => $this->SurveyAdmin_model->jml_taskdone()
		);


		$this->load->view('Admin/UI/Header', $dataa);
		$this->load->view('Admin/UI/Dashboard', $data);
		$this->load->view('Admin/UI/Footer');
	}
}
