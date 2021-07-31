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
        $this->session->unset_userdata('flash');
        $byr = $this->SurveyAdmin_model->select_srvy();

        $data = array('byr' => $byr,);
        $dataa = array(
            'title'  => 'GoSurvey/Verif Pembayaran - Admin',
            'user'   => $this->db->get_where('tbl_user', ['email_usr' => $this->session->userdata('email')])->row_array()
        );

        $this->load->view('Admin/UI/Header', $dataa);
        $this->load->view('Admin/Verifikasi/Verif_pembayaran', $data);
        $this->load->view('Admin/UI/Footer');
    }

    public function edit_pembayaran()
    {
        $dataa = array(
            'title'  => 'GoSurvey/Verif Pembayaran - Admin',
            'user'   => $this->db->get_where('tbl_user', ['email_usr' => $this->session->userdata('email')])->row_array()
        );

        $this->session->set_flashdata('flash', 'di edit');
        $id_task = $this->input->post('id');
        $id_userr = $this->input->post('id_user');
        $sld = $this->SurveyAdmin_model->select_saldo($id_userr);
        $sld_admin = $this->SurveyAdmin_model->select_saldo($dataa['user']['id_usr']);

        foreach ($sld as $a) {
            $saldo =  $a->nominal_saldo;
        }

        foreach ($sld_admin as $sld) {
            $saldo_adm =  $sld->nominal_saldo;
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
        $id_admin = $dataa['user']['id_usr'];

        $data_input1 = array(
            'id'            => $kode,
            'id_usr'        => $id_userr,
            'transaksi'     => $trans,
            'nominal_trans' => $total,
            'wkt_trans'     => $tgl,
            'bukti'         => $bukti,
            'status'        => $status
        );


        if ($bayar == "Saldo") {
            $this->db->set('nominal_saldo', $saldo - $total);
            $this->db->where('id_usr', $id_userr);
            $this->db->update('tbl_saldo');

            $this->db->set('nominal_saldo', $saldo_adm + 2500);
            $this->db->where('id_usr', $id_admin);
            $this->db->update('tbl_saldo');

            // $this->db->set('total_nominal', $total - 2500);
            // $this->db->where('id_task', $id_task);
            // $this->db->update('tbl_task');

            $this->SurveyAdmin_model->insert_riwayat($data_input1);

            if ($this->SurveyAdmin_model->edit_verifpembayaran($data, $id_task) == TRUE) {

                $this->session->set_flashdata('edit', true);
            } else {

                $this->session->set_flashdata('edit', false);
            }
        } else {
            $this->db->set('nominal_saldo', $saldo_adm + 2500);
            $this->db->where('id_usr', $id_admin);
            $this->db->update('tbl_saldo');

            if ($this->SurveyAdmin_model->edit_verifpembayaran($data, $id_task) == TRUE) {
                $this->session->set_flashdata('edit', true);
            } else {

                $this->session->set_flashdata('edit', false);
            }
        }

        // var_dump($data);
        $byr = $this->SurveyAdmin_model->select_srvy();
        $data = array('byr' => $byr);

        $this->load->view('Admin/UI/Header', $dataa);
        $this->load->view('Admin/Verifikasi/Verif_pembayaran', $data);
        $this->load->view('Admin/UI/Footer');
    }

    public function topup()
    {
        $this->session->unset_userdata('flash');
        $top = $this->SurveyAdmin_model->select_topup();
        $data = array('top' => $top,);
        $dataa = array(
            'title'  => 'GoSurvey/Verif Topup - Admin',
            'user'   => $this->db->get_where('tbl_user', ['email_usr' => $this->session->userdata('email')])->row_array()
        );

        $this->load->view('Admin/UI/Header', $dataa);
        $this->load->view('Admin/Verifikasi/Verif_topup', $data);
        $this->load->view('Admin/UI/Footer');
    }

    public function edit_topup()
    {
        $this->session->set_flashdata('flash', 'di edit');
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
        // var_dump($data);

        // $tess = $this->SurveyAdmin_model->edit_riwayatt($data1, $id) == TRUE;
        // $tes2 = $this->SurveyAdmin_model->edit_veriftopup($data, $id) == TRUE;
        // var_dump($tess);
        // var_dump($tes2);
        // die;

        if (
            $this->SurveyAdmin_model->edit_veriftopup($data, $id) == TRUE
            and $this->SurveyAdmin_model->edit_riwayatt($data1, $id) == TRUE
        ) {
            $this->session->set_flashdata('edit', true);
        } else {

            $this->session->set_flashdata('edit', false);
        }
        $top = $this->SurveyAdmin_model->select_topup();
        $data = array('top' => $top,);
        $dataa = array(
            'title'  => 'GoSurvey/Verif Topup - Admin',
            'user'   => $this->db->get_where('tbl_user', ['email_usr' => $this->session->userdata('email')])->row_array()
        );

        $this->load->view('Admin/UI/Header', $dataa);
        $this->load->view('Admin/Verifikasi/Verif_topup', $data);
        $this->load->view('Admin/UI/Footer');
    }

    public function tarik()
    {
        $this->session->unset_userdata('flash');
        $trk = $this->SurveyAdmin_model->select_tarik();
        $data = array('trk' => $trk,);
        $dataa = array(
            'title'  => 'GoSurvey/Verif Tarik - Admin',
            'user'   => $this->db->get_where('tbl_user', ['email_usr' => $this->session->userdata('email')])->row_array()
        );

        $this->load->view('Admin/UI/Header', $dataa);
        $this->load->view('Admin/Verifikasi/Verif_tarik', $data);
        $this->load->view('Admin/UI/Footer');
    }

    public function edit_tarik()
    {
        $this->session->set_flashdata('flash', 'di edit');
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

        // var_dump($tess);
        // die;


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
        $trk = $this->SurveyAdmin_model->select_tarik();
        $data = array('trk' => $trk,);
        $dataa = array(
            'title'  => 'GoSurvey/Verif Tarik - Admin',
            'user'   => $this->db->get_where('tbl_user', ['email_usr' => $this->session->userdata('email')])->row_array()
        );

        $this->load->view('Admin/UI/Header', $dataa);
        $this->load->view('Admin/Verifikasi/Verif_tarik', $data);
        $this->load->view('Admin/UI/Footer');

        // var_dump($id);
        // die;
        // $this->db->where('id_pgn', $id);
        // $this->db->where('pengguna', $data);
        // redirect('Admin_ctrl/Data_member');
    }

    public function return()
    {
        $this->session->unset_userdata('flash');
        $byr = $this->SurveyAdmin_model->select_srvydone();

        $data = array('byr' => $byr,);
        $dataa = array(
            'title'  => 'GoSurvey/Verif Return - Admin',
            'user'   => $this->db->get_where('tbl_user', ['email_usr' => $this->session->userdata('email')])->row_array()
        );

        $this->load->view('Admin/UI/Header', $dataa);
        $this->load->view('Admin/Verifikasi/Verif_return', $data);
        $this->load->view('Admin/UI/Footer');
    }

    public function edit_return()
    {
        $this->session->set_flashdata('flash', 'di edit');
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

        $byr = $this->SurveyAdmin_model->select_srvydone();

        $data = array('byr' => $byr,);
        $dataa = array(
            'title'  => 'GoSurvey/Verif Return - Admin',
            'user'   => $this->db->get_where('tbl_user', ['email_usr' => $this->session->userdata('email')])->row_array()
        );

        $this->load->view('Admin/UI/Header', $dataa);
        $this->load->view('Admin/Verifikasi/Verif_return', $data);
        $this->load->view('Admin/UI/Footer');
    }
}
