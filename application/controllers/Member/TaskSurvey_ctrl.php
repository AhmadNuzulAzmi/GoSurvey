<?php
defined('BASEPATH') or exit('No direct script access allowed');

class TaskSurvey_ctrl extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Task_model');
        $this->load->model('SurveyMember_model');
        $this->load->model('Dompet_model');
        if (!$this->session->userdata('email')) {
            redirect('Login/Auth');
        }
    }

    public function index()
    {
        $data = array(
            'title'  => 'GoSurvey/Buat Survey - Member',
            'user'   => $this->db->get_where('tbl_user', ['email_usr' => $this->session->userdata('email')])->row_array()
        );

        $data['task'] = $this->db->get('tbl_task')->row_array();

        $dataa = array(
            'dompet' =>  $this->Dompet_model->saldo($data['user']['id_usr']),
            'saldo'  =>  $this->Task_model->select_bank()
        );

        $this->load->view('Member/UI/Header', $data);
        $this->load->view('Member/Survey/TaskSurvey', $dataa);
        $this->load->view('Member/UI/Footer');
    }

    public function create_survey()
    {
        $bayar = $this->Task_model->select_bayar();
        $data['user'] = $this->db->get_where('tbl_user', ['email_usr' =>
        $this->session->userdata('email')])->row_array();

        $config['upload_path']          = './assets/gambar/pembayaran';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
        $config['overwrite']            = true;
        $config['file_name']             = 'bayar_' . $bayar[0]->id_task + 1;
        $config['max_size']             = 1024;
        $config['remove_spaces']             = FALSE;
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image')) {
            $gbr = $this->upload->data();
        } else {
            $this->session->set_flashdata('flash', $this->upload->display_errors());;
        }

        $idusr  = $this->input->post("id_usr");
        $jdl    = $this->input->post("judul");
        $desk   = $this->input->post("deskripsi");
        $res    = $this->input->post("jml_res");
        $nom    = $this->input->post("nominal");
        $ttl    = $this->input->post("ttl_nominal");
        $img    = $_FILES['image']['name'];
        $pbyr   = $this->input->post("pembayaran");
        $filter = $this->input->post("filter");

        $data_input = array(
            'id_usr'            => $idusr,
            'judul_task'        => $jdl,
            'desk_task'         => $desk,
            'jmlrespon_task'    => $res,
            'nominal_task'      => $nom,
            'filter'            => $filter,
            'total_nominal'     => $ttl,
            'bukti'             => $gbr['file_name'],
            'pembayaran'        => $pbyr,
            'status'            => "unverified"
        );

        $id = $this->Task_model->insert_task($data_input);
        var_dump($data_input);
        // die;
        echo "<br/>";
        echo "<br/>";
        if ($filter == "ya") {
            $idtask      = $id;
            $id_user     = $idusr;
            $krj         = $this->input->post("kerja");
            $gaji        = $this->input->post("penghasilan");

            $jenk        = implode(",", $this->input->post("jk"));
            $this->input->post("jk");

            $drh         = implode(",", $this->input->post("darah"));
            $this->input->post("darah");

            $roko        = implode(",", $this->input->post("smoking"));
            $this->input->post("smoking");

            $data_input1 = array(
                'id_usr'           => $id_user,
                'id_task'          => $idtask,
                'jenkel'           => $jenk,
                'pekerjaan'        => $krj,
                'penghasilan'      => $gaji,
                'gol_darah'        => $drh,
                'merokok'          => $roko
            );
            var_dump($data_input1);
            // die;

            $this->Task_model->buat_filter($data_input1);
        }

        redirect('/Member/TaskSurvey_ctrl/waiting_survey');
    }

    public function waiting_survey()
    {
        $dataa = array(
            'title'  => 'GoSurvey/Buat Survey - Member',
            'user'   => $this->db->get_where('tbl_user', ['email_usr' => $this->session->userdata('email')])->row_array()
        );

        $dataa['task'] = $this->db->get_where('tbl_task', ['id_task' =>
        $this->session->userdata('id_task')])->row_array();

        $soal = $this->SurveyMember_model->tampil_idtask();


        $srvy = $this->SurveyMember_model->select_task($dataa['user']['id_usr']);
        $data = array('srvy' => $srvy, 'soal' => $soal,);

        $this->load->view('Member/UI/Header', $dataa);
        $this->load->view('Member/Survey/Wait_survey', $data);
        $this->load->view('Member/UI/Footer');
    }
}
