<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Harga_ctrl extends CI_Controller
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
        // $this->session->unset_userdata('flash');
        $harga = $this->Pgn_model->select_harga();
        $data = array('harga' => $harga,);
        $dataa = array(
            'title'  => 'GoSurvey/Setting Rek - Admin',
            'user'   => $this->db->get_where('tbl_user', ['email_usr' => $this->session->userdata('email')])->row_array()
        );

        $this->load->view('Admin/UI/Header', $dataa);
        $this->load->view('Admin/Setting/harga', $data);
        $this->load->view('Admin/UI/Footer');
    }
    public function register_saldo()
    {
        $this->session->set_flashdata('flash', 'di tambah');
        $data = [
            'id' => $this->input->post('id'),
            'harga' => $this->input->post('harga'),
            'jml_saldo' => $this->input->post('jumlah'),


        ];
        // var_dump($data);
        // die;
        $this->db->insert('tbl_harga_saldo', $data);
        redirect('Admin/Harga_ctrl');
    }

    public function editaction()
    {
        $this->session->set_flashdata('flash', 'di edit');
        $id = $this->input->post('id');
        $data = [

            'id' => $this->input->post('id'),
            'harga' => $this->input->post('harga'),
            'jml_saldo' => $this->input->post('jml_saldo')



        ];

        // if ($this->Pgn_model->ubahdatapgn($data, $id) == TRUE) {
        //     $this->session->set_flashdata('edit', true);
        // } else {
        //     $this->session->set_flashdata('edit', false);
        // }
        // $this->db->update('tbl_harga_saldo', $data, array('id' => $id));
        // return ($this->db->affected_rows() > 0) ? TRUE : FALSE;
        $this->db->where('id', $id);
        $this->db->update('tbl_harga_saldo', $data);

        // var_dump($data);
        // die;

        redirect('Admin/Harga_ctrl');
    }
    public function hapus_Saldo($data)
    {
        $this->session->set_flashdata('flash', 'di hapus');

        $this->Pgn_model->delete_saldo($data);
        $this->session->set_flashdata('flash', 'Dihapus');
        $harga = $this->Pgn_model->select_harga();
        $data = array('harga' => $harga,);

        redirect('Admin/Harga_ctrl');
    }
}
