<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Verifikasi_ctrl extends CI_Controller
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
    }

    public function pembayaran()
    {
        $byr = $this->SurveyAdmin_model->select_srvy();

        $data = array('byr' => $byr,);
        $dataa = array(
            'title'  => 'GoSurvey/Verif Pembayaran - Admin',
            'user'   => $this->db->get_where('tbl_user', ['email_usr' => $this->session->userdata('email')])->row_array()
        );

        $this->load->view('Admin/UI/Header', $dataa);
        $this->load->view('Admin/verifikasi/Verif_pembayaran', $data);
        $this->load->view('Admin/UI/Footer');
    }

    public function edit_pembayaran()
    {
        $id = $this->input->post('id');
        $id_userr = $this->input->post('id_user');
        $sld = $this->SurveyAdmin_model->select_saldo($id_userr);

        foreach ($sld as $a) {
            $saldo =  $a->nominal_saldo;
        }

        $bayar = $this->input->post('bayar');
        $total = $this->input->post('total');

        $data = [
            'id_task'    => $this->input->post('id'),
            'status'     => $this->input->post('status')
        ];

        $trans = "Bayar Survey";
        $tgl = time();
        $bukti = "";
        $status = "Verified";
        $kode = 0;

        $data_input1 = array(
            'id'            => $kode,
            'id_usr'        => $id_userr,
            'transaksi'     => $trans,
            'nominal_trans' => $total,
            'wkt_trans'     => time(),
            'bukti'         => $bukti,
            'status'        => $status
        );

        if ($bayar == "Saldo") {
            $this->db->set('nominal_saldo', $saldo - $total);
            $this->db->where('id_usr', $id_userr);
            $this->db->update('tbl_saldo');
            $this->SurveyAdmin_model->insert_riwayat($data_input1);

            if ($this->SurveyAdmin_model->edit_verifpembayaran($data, $id) == TRUE) {

                $this->session->set_flashdata('edit', true);
            } else {

                $this->session->set_flashdata('edit', false);
            }
        } else {
            if ($this->SurveyAdmin_model->edit_verifpembayaran($data, $id) == TRUE) {

                $this->session->set_flashdata('edit', true);
            } else {

                $this->session->set_flashdata('edit', false);
            }
        }

        // var_dump($data);

        redirect(base_url('Admin/verifikasi_ctrl/pembayaran'));
    }

    public function topup()
    {
        $top = $this->SurveyAdmin_model->select_topup();
        $data = array('top' => $top,);
        $dataa = array(
            'title'  => 'GoSurvey/Verif Topup - Admin',
            'user'   => $this->db->get_where('tbl_user', ['email_usr' => $this->session->userdata('email')])->row_array()
        );

        $this->load->view('Admin/UI/Header', $dataa);
        $this->load->view('Admin/verifikasi/Verif_topup', $data);
        $this->load->view('Admin/UI/Footer');
    }

    public function edit_topup()
    {
        $id = $this->input->post('id');
        $data = [

            'id' => $this->input->post('id'),
            'status' => $this->input->post('status'),
        ];

        $data1 = [

            'id' => $this->input->post('id'),
            'status' => $this->input->post('status'),
        ];

        // var_dump($data1);
        // die;

        if (
            $this->SurveyAdmin_model->edit_veriftopup($data, $id) == TRUE
            and $this->SurveyAdmin_model->edit_riwayat($data1, $id) == TRUE
        ) {
            $this->session->set_flashdata('edit', true);
        } else {

            $this->session->set_flashdata('edit', false);
        }
        redirect(base_url('Admin/Verifikasi_ctrl/topup'));
    }

    public function tarik()
    {
        $trk = $this->SurveyAdmin_model->select_tarik();
        $data = array('trk' => $trk,);
        $dataa = array(
            'title'  => 'GoSurvey/Verif Tarik - Admin',
            'user'   => $this->db->get_where('tbl_user', ['email_usr' => $this->session->userdata('email')])->row_array()
        );

        $this->load->view('Admin/UI/Header', $dataa);
        $this->load->view('Admin/verifikasi/Verif_tarik', $data);
        $this->load->view('Admin/UI/Footer');
    }

    public function edit_tarik()
    {
        $config['upload_path']          = './assets/gambar/dompet';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['overwrite']            = true;
        $config['max_size']             = 1024; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image')) {
            $this->upload->data("file_name");
        }

        $id = $this->input->post('id');
        $data = [

            'id' => $this->input->post('id'),
            'bukti' => $_FILES['image']['name'],
            'status' => $this->input->post('status'),

        ];


        $data1 = [
            'id' => $this->input->post('id'),
            'bukti' => $_FILES['image']['name'],
            'status' => $this->input->post('status'),
        ];

        if (
            $this->SurveyAdmin_model->edit_veriftarik($data, $id) == TRUE
            and $this->SurveyAdmin_model->edit_riwayattarik($data1, $id) == TRUE
        ) {

            $this->session->set_flashdata('edit', true);
        } else {

            $this->session->set_flashdata('edit', false);
        }
        // var_dump($data);
        // die;
        redirect(base_url('Admin/Verifikasi_ctrl/tarik'));

        // var_dump($id);
        // die;
        // $this->db->where('id_pgn', $id);
        // $this->db->where('pengguna', $data);
        // redirect('Admin_ctrl/Data_member');
    }

    public function return()
    {
        $byr = $this->SurveyAdmin_model->select_srvydone();

        $data = array('byr' => $byr,);
        $dataa = array(
            'title'  => 'GoSurvey/Verif Return - Admin',
            'user'   => $this->db->get_where('tbl_user', ['email_usr' => $this->session->userdata('email')])->row_array()
        );

        $this->load->view('Admin/UI/Header', $dataa);
        $this->load->view('Admin/verifikasi/Verif_return', $data);
        $this->load->view('Admin/UI/Footer');
    }

    public function edit_return()
    {
        $id = $this->input->post('id');
        $id_userr = $this->input->post('id_user');
        $sld = $this->SurveyAdmin_model->select_saldo($id_userr);
        $trans = "Return Dana";
        $tgl = time();
        $bukti = "";
        $status = "Verified";
        $kode = 0;

        foreach ($sld as $a) {
            $saldo =  $a->nominal_saldo;
        }

        $total = $this->input->post('total');

        $data_input1 = array(
            'id'            => $kode,
            'id_usr'        => $id_userr,
            'transaksi'     => $trans,
            'nominal_trans' => $total,
            'wkt_trans'     => time(),
            'bukti'         => $bukti,
            'status'        => $status
        );
        $this->SurveyAdmin_model->insert_riwayat($data_input1);

        // var_dump($id_userr);
        // var_dump($saldo);
        // var_dump($total);
        // die;
        $this->db->set('total_nominal', 0);
        $this->db->where('id_task', $id);
        $this->db->update('tbl_task');

        $this->db->set('nominal_saldo', $saldo + $total);
        $this->db->where('id_usr', $id_userr);
        $this->db->update('tbl_saldo');

        redirect(base_url('Admin/verifikasi_ctrl/return'));
    }
}
