<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MemberMin_ctrl extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Pgn_model');
        $this->load->library('form_validation');
        if (!$this->session->userdata('email')) {
            redirect('Login/Auth');
        }
    }

    public function index()
    {
        $this->session->unset_userdata('flash');

        $dataa = array(
            'title'  => 'GoSurvey/Data Pengguna - Admin',
            'user'   => $this->db->get_where('tbl_user', ['email_usr' => $this->session->userdata('email')])->row_array()
        );
        $pgn = $this->Pgn_model->select_userr($dataa['user']['id_usr']);
        $data = array('pgn' => $pgn,);

        $this->load->view('Admin/UI/Header', $dataa);
        $this->load->view('Admin/Member/Data_member', $data);
        $this->load->view('Admin/UI/Footer');
    }

    public function hapus($data)
    {
        $this->session->set_flashdata('flash', 'di hapus');
        $dataa = array(
            'title'  => 'GoSurvey/Hapus Data - Admin',
            'user'   => $this->db->get_where('tbl_user', ['email_usr' => $this->session->userdata('email')])->row_array()
        );

        $hapus = $this->Pgn_model->delete($data);

        $pgn = $this->Pgn_model->select_user();
        $data = array('pgn' => $pgn,);




        $this->load->view('Admin/UI/Header', $dataa);
        $this->load->view('Admin/Member/Data_member', $data);
        $this->load->view('Admin/UI/Footer');
    }

    public function edit($data)
    {
        $data['tbl_usr'] = $this->Pgn_model->get_by_id($data);
        $id = $this->input->post('id_usr');
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim');
        // $this->form_validation->set_rules('password', 'Password', 'required|trim');
        $this->form_validation->set_rules('status', 'Status', 'required|trim');


        if ($this->form_validation->run() == false) {


            redirect('Admin/MemberMin_ctrl', $data);
        } else {

            $this->pgn_model->ubahdatapgn();
            redirect('Admin/MemberMin_ctrl');
        }
    }

    public function editaction()
    {
        $this->session->set_flashdata('flash', 'di edit');
        $id = $this->input->post('id');
        $data = [

            'id_usr' => $this->input->post('id'),
            'nama_usr' => $this->input->post('name'),
            'email_usr' => $this->input->post('email'),
            'image_usr' => "Default.png",
            // 'Password_usr' => $this->input->post('password'),
            'role_id' => $this->input->post('status'),
            'is_active' => "1"
            // 'date_created' => "Null"

        ];

        if ($this->Pgn_model->ubahdatapgn($data, $id) == TRUE) {
            $this->session->set_flashdata('edit', true);
        } else {
            $this->session->set_flashdata('edit', false);
        }

        $dataa = array(
            'title'  => 'GoSurvey/Data Pengguna - Admin',
            'user'   => $this->db->get_where('tbl_user', ['email_usr' => $this->session->userdata('email')])->row_array()
        );
        $pgn = $this->Pgn_model->select_userr($dataa['user']['id_usr']);
        $data = array('pgn' => $pgn,);

        $this->load->view('Admin/UI/Header', $dataa);
        $this->load->view('Admin/Member/Data_member', $data);
        $this->load->view('Admin/UI/Footer');
    }

    public function register_pgn2()
    {
        $this->session->set_flashdata('flash', ' di tambah');
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        $this->form_validation->set_rules('status', 'Status', 'required|trim');


        if ($this->form_validation->run() == false) {

            $data['title'] = 'Registrasi';
            $this->load->view('Admin/UI/Dashboard', $data);
        } else {
            $data = [
                'nama_usr' =>  htmlspecialchars($this->input->post('name', true)),
                'email_usr' => htmlspecialchars($this->input->post('email', true)),
                'image_usr' => "default.png",
                'Password_usr' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'role_id' => $this->input->post('status'),
                'is_active' => "1",
                'date_created' => time()

            ];

            $success = $this->db->insert('tbl_user', $data);
            $dataa = array(
                'title'  => 'GoSurvey/Data Pengguna - Admin',
                'user'   => $this->db->get_where('tbl_user', ['email_usr' => $this->session->userdata('email')])->row_array()
            );
            $pgn = $this->Pgn_model->select_userr($dataa['user']['id_usr']);
            $data = array('pgn' => $pgn,);

            $this->load->view('Admin/UI/Header', $dataa);
            $this->load->view('Admin/Member/Data_member', $data);
            $this->load->view('Admin/UI/Footer');
        }
    }
}
