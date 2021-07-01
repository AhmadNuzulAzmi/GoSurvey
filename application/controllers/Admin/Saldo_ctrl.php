<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Saldo_ctrl extends CI_Controller
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
        $this->session->unset_userdata('flash');
        $saldo = $this->Pgn_model->select_bank();
        $data = array('saldo' => $saldo,);
        $dataa = array(
            'title'  => 'GoSurvey/Setting Rek - Admin',
            'user'   => $this->db->get_where('tbl_user', ['email_usr' => $this->session->userdata('email')])->row_array()
        );

        $this->load->view('Admin/UI/Header', $dataa);
        $this->load->view('Admin/Setting/saldo', $data);
        $this->load->view('Admin/UI/Footer');
    }

    public function register_bank()
    {


        $this->session->set_flashdata('flash', 'di tambah');
        $config['upload_path']          = './assets/gambar/logo';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['overwrite']            = true;
        $config['max_size']             = 1024; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image')) {
            $this->upload->data("file_name");
        }

        $data = [
            'logo_bank' => $_FILES['image']['name'],
            'nama_bank' => $this->input->post('NamaBank'),
            'nomor_bank' => $this->input->post('NomorBank'),
            'atas_nama' => $this->input->post('ats_nama')

        ];

        $this->db->insert('tbl_bank', $data);
        $saldo = $this->Pgn_model->select_bank();
        $data = array('saldo' => $saldo,);
        $dataa = array(
            'title'  => 'GoSurvey/Setting Rek - Admin',
            'user'   => $this->db->get_where('tbl_user', ['email_usr' => $this->session->userdata('email')])->row_array()
        );

        $this->load->view('Admin/UI/Header', $dataa);
        $this->load->view('Admin/Setting/saldo', $data);
        $this->load->view('Admin/UI/Footer');
    }

    public function edit2($data)
    {

        $data['tbl_bank'] = $this->Pgn_model->get_by_id2($data);

        $id = $this->input->post('no_bank');
        $this->form_validation->set_rules('logo', 'Logo', 'required|trim');
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('nomor', 'Nomor', 'required|trim');


        if ($this->form_validation->run() == false) {

            redirect(base_url('Admin/Saldo_ctrl', $data));
        } else {

            $this->pgn_model->ubahdatabank();
            redirect(base_url('Admin/Saldo_ctrl'));
        }
    }

    public function editaction2()
    {

        $this->session->set_flashdata('flash', 'di edit');
        $config['upload_path']          = './assets/gambar/logo';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['overwrite']            = true;
        $config['max_size']             = 1024;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image')) {
            $this->upload->data("file_name");
        }

        $id = $this->input->post('id');
        $data = [

            'no_bank' => $this->input->post('id'),
            'logo_bank' => $_FILES['image']['name'],
            'nama_bank' => $this->input->post('nama'),
            'nomor_bank' => $this->input->post('nomor'),
            'atas_nama' => $this->input->post('ats_nama')

        ];

        if ($this->Pgn_model->ubahdatabank($data, $id) == TRUE) {
            $this->session->set_flashdata('edit2', true);
        } else {
            $this->session->set_flashdata('edit2', false);
        }

        $saldo = $this->Pgn_model->select_bank();
        $data = array('saldo' => $saldo,);
        $dataa = array(
            'title'  => 'GoSurvey/Setting Rek - Admin',
            'user'   => $this->db->get_where('tbl_user', ['email_usr' => $this->session->userdata('email')])->row_array()
        );

        $this->load->view('Admin/UI/Header', $dataa);
        $this->load->view('Admin/Setting/saldo', $data);
        $this->load->view('Admin/UI/Footer');
    }

    public function hapus_bank($data)
    {

        $this->session->set_flashdata('flash', 'di hapus');
        $this->Pgn_model->delete_bank($data);
        $pgn = $this->Pgn_model->select_bank();
        $data = array('pgn' => $pgn,);


        $saldo = $this->Pgn_model->select_bank();
        $data = array('saldo' => $saldo,);
        $dataa = array(
            'title'  => 'GoSurvey/Setting Rek - Admin',
            'user'   => $this->db->get_where('tbl_user', ['email_usr' => $this->session->userdata('email')])->row_array()
        );

        $this->load->view('Admin/UI/Header', $dataa);
        $this->load->view('Admin/Setting/saldo', $data);
        $this->load->view('Admin/UI/Footer');
    }
}
