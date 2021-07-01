<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SoalSurvey_ctrl extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('SurveyMember_model');
        $this->load->model('Dompet_model');
        if (!$this->session->userdata('email')) {
            redirect('Login/Auth');
        }
    }

    public function index($id)
    {
        $data = array(
            'title'  => 'GoSurvey/Soal Survey - Member',
            'user'   => $this->db->get_where('tbl_user', ['email_usr' => $this->session->userdata('email')])->row_array()
        );

        $data['id_task'] = $id;
        $dataa['judul_task'] = $this->SurveyMember_model->task_byidtask($id);
        // var_dump($dataa['judul_task']);
        // die;



        $this->load->view('Member/UI/Header', $data);
        $this->load->view('Member/Survey/soal_survey', $dataa);
        $this->load->view('Member/UI/Footer');
    }

    public function buatsoal()
    {
        $id = $this->input->post('idtask');
        $idso = $this->input->post('idsoal');

        foreach ($_POST['Soal'] as $v => $soal) {

            $type = $_POST['tipe_soal'][$v];
            $id_task = $this->input->post('idtask');
            $data_input = array(
                'id_task' => $id,
                'soal' => $soal,
                'type_soal' => $type
            );

            $idsoal = $this->SurveyMember_model->buat_soal($data_input);

            if ($type == "Radio" || $type == "Checkbox") {
                $pil = $_POST['pil_option-' . $v];
                foreach ($pil as $item) {
                    $data_input1 = array(
                        'id_task' => $id_task,
                        'id_soal' => $idsoal,
                        'pilihan_opt' => $item
                    );
                    // var_dump($_POST);
                    // die;
                    $this->SurveyMember_model->buat_soal_option($data_input1);
                }
            }
        }
        redirect('/Member/TaskSurvey_ctrl/waiting_survey');
    }

    public function tampil_soal($id)
    {
        $dataa = array(
            'title'  => 'GoSurvey/Soal Survey - Member',
            'user'   => $this->db->get_where('tbl_user', ['email_usr' => $this->session->userdata('email')])->row_array()
        );

        $data['id_task'] = $id;

        $soal = $this->SurveyMember_model->tampil_soal($id);
        $soal_opt = $this->SurveyMember_model->soal_option($id);
        $task = $this->SurveyMember_model->tampil_alltask();
        $data = array(
            'soal' => $soal,
            'soal_opt' => $soal_opt,
            'task' => $task,
            'judul_task' => $this->SurveyMember_model->task_byidtask($id)
        );

        // var_dump($data);

        // die;

        $cek    = $this->SurveyMember_model->cek_jawaban($dataa['user']['id_usr'], $id);
        if ($cek > 0) {
            $this->load->view('Member/UI/Header', $dataa);
            $this->load->view('Member/Survey/Survey_done');
            $this->load->view('Member/UI/Footer');
        } else {
            $this->load->view('Member/UI/Header', $dataa);
            $this->load->view('Member/Survey/Tampil_soal', $data);
            $this->load->view('Member/UI/Footer');
        }
    }

    public function jawabsoal()
    {
        $id_taskk = $this->input->post('idtask');
        $id_user = $this->input->post('iduser');

        $soal_db = $this->db->get_where('tbl_soal', ['id_task' => $id_taskk])->result();
        $data = array('soal_db' => $soal_db,);


        $question = $_POST['soal'];
        $text = $this->input->post('jawaban1');
        $textarea = $this->input->post('jawaban2');
        $radio = $this->input->post('jawaban3');



        $answer = [];
        foreach ($soal_db as $v) {
            foreach ($question as $y) {
                if ($v->soal == $y) {
                    if ($v->type_soal == "Text") {
                        echo "$y";
                        $id = $v->id_soal;
                        $jawabann = [
                            'id_soal' =>  $id,
                            'type_soal' => $v->type_soal,
                            'answer' => "$text",
                        ];
                        echo "<br/>";
                    } elseif ($v->type_soal == "Textarea") {
                        echo "$y";
                        $id = $v->id_soal;
                        $jawabann = [
                            'id_soal' =>  $id,
                            'type_soal' => $v->type_soal,
                            'answer' => "$textarea",
                        ];
                        echo "<br/>";
                    } elseif ($v->type_soal == "Radio") {
                        echo "$y";
                        $id = $v->id_soal;
                        $jawabann = [
                            'id_soal' => $id,
                            'type_soal' => $v->type_soal,
                            'answer' => "$radio",
                        ];
                        // echo "<br/>";
                    } elseif ($v->type_soal == "Checkbox") {
                        $check = $_POST['jawaban' . $v->id_soal];
                        $jawab_multi = join('", "', $check);
                        // var_dump($jawab_multi);
                        // die;

                        $jawab_option =  $jawab_multi;
                        echo "$y";
                        $id = $v->id_soal;
                        $jawabann = [
                            'id_soal' => $id,
                            'type_soal' => $v->type_soal,
                            'answer' =>  ["$jawab_option"],
                        ];

                        // echo "<br/>";
                    }
                    array_push($answer, $jawabann);
                }
            }
        }

        $uang = $this->input->post('nominal');
        $save = json_encode($answer);
        // var_dump($save);
        // die;
        // echo "<br/>";
        // echo "<br/>";

        $trans = "Jawab Survey";
        $tgl = time();
        $bukti = "";
        $status = "Verified";
        $kode = 0;

        $data_input1 = array(
            'id'            => $kode,
            'id_usr'        => $id_user,
            'transaksi'     => $trans,
            'nominal_trans' => $uang,
            'wkt_trans'     => time(),
            'bukti'         => $bukti,
            'status'        => $status
        );

        $sql = "INSERT INTO `tbl_jawaban` (`id_usr`, `id_task`, `jawaban`, `nominal`) VALUES ($id_user, $id_taskk, '$save', $uang )";
        $this->db->query($sql);
        var_dump($data_input1);
        $this->Dompet_model->insert_riwayat($data_input1);

        redirect('/Member/ActiveSurvey_ctrl');
    }
}
