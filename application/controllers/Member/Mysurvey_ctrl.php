<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mysurvey_ctrl extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('SurveyMember_model');
        if (!$this->session->userdata('email')) {
            redirect('Login/Auth');
        }
    }

    public function index()
    {
        $dataa = array(
            'title'  => 'GoSurvey/Dompet - Member',
            'user'   => $this->db->get_where('tbl_user', ['email_usr' => $this->session->userdata('email')])->row_array()
        );

        $soal = $this->SurveyMember_model->tampil_idtask();

        $srvy = $this->SurveyMember_model->survey_byid($dataa['user']['id_usr']);
        $data = array('srvy' => $srvy, 'soal' => $soal,);

        $this->load->view('Member/UI/Header', $dataa);
        $this->load->view('Member/Survey/Data_survey', $data);
        $this->load->view('Member/UI/Footer');
    }

    public function tampil_jwbsurvey($id)
    {
        $dataa = array(
            'title'  => 'GoSurvey/Jawaban Survey - Member',
            'user'   => $this->db->get_where('tbl_user', ['email_usr' => $this->session->userdata('email')])->row_array()
        );

        $data['id_task'] = $id;

        $soal       = $this->SurveyMember_model->tampil_soal($id);
        $soal_opt   = $this->SurveyMember_model->soal_option($id);
        $task       = $this->SurveyMember_model->tampil_alltask();
        $jwb        = $this->SurveyMember_model->jawaban($id);
        $data = array(
            'soal'     => $soal,
            'soal_opt' => $soal_opt,
            'task'     => $task,
            'jwb'      => $jwb
        );


        $this->load->view('Member/UI/Header', $dataa);
        $this->load->view('Member/Survey/Export_file', $data);
        $this->load->view('Member/UI/Footerr');
    }

    public function akhir_survey($id)
    {
        $dataa = array(
            'title'  => 'GoSurvey/Akhir Survey - Member',
            'user'   => $this->db->get_where('tbl_user', ['email_usr' => $this->session->userdata('email')])->row_array()
        );

        $data['id_task'] = $id;

        $srvy = $this->SurveyMember_model->survey_byidtask($id);
        $data = array('srvy' => $srvy);

        $nominal = 0;

        $this->db->set('jmlrespon_task', $nominal);
        $this->db->where('id_task', $id);
        $this->db->update('tbl_task');


        $this->load->view('Member/UI/Header', $dataa);
        $this->load->view('Member/Survey/Survey_berakhir', $data);
        $this->load->view('Member/UI/Footerr');
    }

    // public function coba($id)
    // {
    //     $dataa['user'] = $this->db->get_where('tbl_user', ['email_usr' =>
    //     $this->session->userdata('email')])->row_array();

    //     $data['id_task'] = $id;

    //     $soal       = $this->SurveyMember_model->tampil_soal($id);
    //     $soal_opt   = $this->SurveyMember_model->soal_option($id);
    //     $task       = $this->SurveyMember_model->tampil_alltask();
    //     $jwb        = $this->SurveyMember_model->jawaban($id);
    //     $data = array(
    //         'soal' => $soal,
    //         'soal_opt' => $soal_opt,
    //         'task' => $task,
    //         'jwb' => $jwb
    //     );


    //     $this->load->view('Member/UI/Header', $dataa);
    //     $this->load->view('Member/Survey/Export_file', $data);
    //     $this->load->view('Member/UI/Footer');
    // }

    // public function export($id)
    // {
    //     header("Content-type: application/vnd-ms-excel");
    //     header("Content-Disposition: attachment; filename=Data Jawaban.xls");
    //     $data['id_task'] = $id;

    //     $data['jwb']       = $this->SurveyMember_model->export_detail_pks($id);
    //     $data['soal']      = $this->SurveyMember_model->tampil_soal2($id);

    //     $this->load->view('Member/Survey/excel', $data);
    // }
}