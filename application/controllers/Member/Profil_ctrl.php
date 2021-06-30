<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil_ctrl extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Profil_model');
        if (!$this->session->userdata('email')) {
            redirect('Login/Auth');
        }
    }

    public function index()
    {

        $data = array(
            'title'  => 'GoSurvey/Profil - Member',
            'user'   => $this->db->get_where('tbl_user', ['email_usr' => $this->session->userdata('email')])->row_array()
        );

        $data['profil'] = $this->db->get_where('tbl_profil', ['id_usr' => $data['user']['id_usr']])->row_array();

        // var_dump($data['profil']);
        // die;

        $this->load->view('Member/UI/Header', $data);
        $this->load->view('Member/Profil/ViewProfil', $data);
        $this->load->view('Member/UI/Footer');
    }

    public function isi_profil()
    {
        $data = array(
            'title'  => 'GoSurvey/Isi Profil - Member',
            'user'   => $this->db->get_where('tbl_user', ['email_usr' => $this->session->userdata('email')])->row_array()
        );

        $this->load->view('Member/UI/Header', $data);
        $this->load->view('Member/Profil/Isi_profil', $data);
        $this->load->view('Member/UI/Footer');
    }

    // public function a()
    // {
    //     $data['user'] = $this->db->get_where('tbl_user', ['email_usr' =>
    //     $this->session->userdata('email')])->row_array();

    //     $this->load->view('Member/UI/Header', $data);
    //     $this->load->view('Member/Profil/Profil');
    //     $this->load->view('Member/UI/Footer');
    // }

    public function create_profil()
    {
        $data['user'] = $this->db->get_where('tbl_user', ['email_usr' =>
        $this->session->userdata('email')])->row_array();

        $idusr       = $this->input->post("id_usr");
        $jenk        = $this->input->post("jk");
        $tgl         = $this->input->post("tgl_lhr");
        $drh         = $this->input->post("darah");
        $alm         = $this->input->post("almt");
        $prop        = $this->input->post("prov");
        $kabu        = $this->input->post("kab");
        $keca        = $this->input->post("kec");
        $kelu        = $this->input->post("kel");
        $krj         = $this->input->post("kerja");
        $pengha      = $this->input->post("penghasilan");
        $nama_ins    = $this->input->post("nama_institusi");
        $nohpe       = $this->input->post("nohp");
        $ige         = $this->input->post("ig");
        $roko        = $this->input->post("smoking");
        $devic       = implode(",", $this->input->post("device"));
        $this->input->post("device");


        $data_input = array(
            'id_usr'          => $idusr,
            'jenkel'          => $jenk,
            'tgl_lahir'       => $tgl,
            'gol_darah'       => $drh,
            'alamat'          => $alm,
            'id_prov'         => $prop,
            'id_kab'          => $kabu,
            'id_kec'          => $keca,
            'id_kel'          => $kelu,
            'pekerjaan'       => $krj,
            'jml_penghasilan' => $pengha,
            'institusi'       => $nama_ins,
            'no_hp'           => $nohpe,
            'instagram'       => $ige,
            'merokok'         => $roko,
            'gadget'          => $devic
        );

        $this->Profil_model->isi_profil($data_input);
        redirect('/Member/Profil_ctrl');

        // var_dump($data_input);
        // die();
    }
}
