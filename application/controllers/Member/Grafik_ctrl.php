<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Grafik_ctrl extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    function index()
    {
        $data['user'] = $this->db->get_where('tbl_user', ['email_usr' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('Member/UI/Header', $data);
        $this->load->view('Member/Survey/Grafik_survey');
        $this->load->view('Member/UI/Footer');
    }
}
