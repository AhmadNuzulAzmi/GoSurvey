<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dompet_ctrl extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Dompet_model');
        $this->load->library('pagination');
        $this->load->helper('url');
        if (!$this->session->userdata('email')) {
            redirect('Login/Auth');
        }
    }

    public function index()
    {
        $dataa = array(
            'title'  => 'GoSurvey/Dompet - Member',
            'user' => $this->db->get_where('tbl_user', ['email_usr' => $this->session->userdata('email')])->row_array()
        );

        $data = array(
            'rwyt' => $this->Dompet_model->lihat_riwayat($dataa['user']['id_usr']),
            // 'status' => $this->Dompet_model->riwayat_status($dataa['user']['id_usr']),
            'dompet' =>  $this->Dompet_model->saldo($dataa['user']['id_usr']),
            'trans' => $this->Dompet_model->riwayat_transaksi($dataa['user']['id_usr'])
        );

        $this->load->view('Member/UI/Header', $dataa);
        $this->load->view('Member/Saldo/Dompet', $data);
        $this->load->view('Member/UI/Footer');
    }

    public function topup()
    {

        $data = array(
            'title'  => 'GoSurvey/Topup - Member',
            'user'   => $this->db->get_where('tbl_user', ['email_usr' => $this->session->userdata('email')])->row_array()
        );

        $data['dompet'] = $this->Dompet_model->saldo($data['user']['id_usr']);

        $this->load->view('Member/UI/Header', $data);
        $this->load->view('Member/Saldo/Topup', $data);
        $this->load->view('Member/UI/Footer');
    }

    public function isi_topup()
    {
        $topup = $this->Dompet_model->select_topup();
        $this->session->set_flashdata('flash', 'di topup');
        $data['user'] = $this->db->get_where('tbl_user', ['email_usr' =>
        $this->session->userdata('email')])->row_array();

        $config['upload_path']          = './assets/gambar/dompet';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
        $config['overwrite']            = true;
        $config['file_name']             = 'topup_' . $topup[0]->id + 1;
        $config['max_size']             = 1024;
        $config['remove_spaces']             = FALSE;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image')) {
            $gbr = $this->upload->data();
        } else {
            $this->session->set_flashdata('flash', $this->upload->display_errors());;
        }


        // $bkt = $_FILES['image']['name'];


        $idusr = $this->input->post("id_usr");
        $nom = $this->input->post("nominal");
        $tran = "Topup";
        $bkt = $_FILES['image']['name'];
        $sts = "Unverified";

        $data_input = array(
            'id_usr'    => $topup[0]->id_usr,
            'tgl_topup' => time(),
            'jml_topup' => $nom,
            'bukti'     => $gbr['file_name'],
            'transaksi' => $tran,
            'status'    => $sts
        );
        // var_dump($data_input);
        // die;

        $idtask = $this->Dompet_model->isi_topup($data_input);

        $data_input1 = array(
            'id'            => $topup[0]->id_usr,
            'id_usr'        => $idusr,
            'transaksi'     => $tran,
            'nominal_trans' => $nom,
            'wkt_trans'     => time(),
            'bukti'         => $gbr['file_name'],
            'status'        => $sts
        );

        $this->Dompet_model->insert_riwayat($data_input1);
        redirect('/Member/Dompet_ctrl');
    }

    public function tarik()
    {
        $dataa = array(
            'title'  => 'GoSurvey/Tarik - Member',
            'user'   => $this->db->get_where('tbl_user', ['email_usr' => $this->session->userdata('email')])->row_array()
        );

        $data['dompet'] = $this->Dompet_model->saldo($dataa['user']['id_usr']);

        $this->load->view('Member/UI/Header', $dataa);
        $this->load->view('Member/Saldo/Tarik', $data);
        $this->load->view('Member/UI/Footer');
    }

    public function tarik_saldo()
    {
        $data['user'] = $this->db->get_where('tbl_user', ['email_usr' =>
        $this->session->userdata('email')])->row_array();

        $data['dompet'] = $this->Dompet_model->saldo($data['user']['id_usr']);

        $idusr   = $this->input->post("id_usr");
        $nom     = $this->input->post("nominal");
        $bayar   = $this->input->post("bayar_via");
        $rek     = $this->input->post("rek");
        $nama    = $this->input->post("atas_nama");
        $bkt     = "";
        $tran    = "Tarik";
        $sts     = "Unverified";

        $data_input = array(
            'id_usr'        => $idusr,
            'tgl_tarik'     => time(),
            'jml_tarik'     => $nom,
            'transaksi'     => $tran,
            'pembayaran'    => $bayar,
            'no_rek'        => $rek,
            'ats_nama'      => $nama,
            'bukti'         => $bkt,
            'status'        => $sts

        );
        // var_dump($data_input);
        // die;

        $id_task = $this->Dompet_model->tarik_saldo($data_input);

        $data_input1 = array(
            'id'            => $id_task,
            'id_usr'        => $idusr,
            'transaksi'     => $tran,
            'nominal_trans' => $nom,
            'wkt_trans'     => time(),
            'bukti'         => $bkt,
            'status'        => $sts
        );

        $this->Dompet_model->insert_riwayat($data_input1);
        redirect('/Member/Dompet_ctrl');
    }
}
