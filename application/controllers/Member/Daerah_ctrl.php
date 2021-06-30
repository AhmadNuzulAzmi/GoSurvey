<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Daerah_ctrl extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Daerah_model');
        if (!$this->session->userdata('email')) {
            redirect('Login/Auth');
        }
    }

    function index()
    {
        $data['hasil'] = $this->Daerah_model->Provinsi();

        $data['user'] = $this->db->get_where('tbl_user', ['email_usr' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('Member/UI/Header', $data);
        $this->load->view('Member/Profil/Isi_profil', $data);
        $this->load->view('Member/UI/Footer');
    }

    function get_provinsi()
    {
        $id_prov = $this->input->post('id_prov');
        $data = $this->Daerah_model->Kabupaten($id_prov);
        echo json_encode($data);
    }

    function get_kabupaten()
    {
        $id_kec = $this->input->post('id_kab');
        $data = $this->Daerah_model->Kecamatan($id_kec);
        echo json_encode($data);
    }

    function get_kecamatan()
    {
        $id_kec = $this->input->post('id_kec');
        $data = $this->Daerah_model->Kelurahan($id_kec);
        echo json_encode($data);
    }
}
