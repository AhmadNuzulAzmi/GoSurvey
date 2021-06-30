<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Pgn_model');
    }


    public function index()
    {
        // $this->load->view('Login/login');


        if ($this->session->userdata('') && $this->session->userdata('logined') == true) {
            redirect('home');
        }
        if (!$this->input->post()) {
            $this->load->view('Login/login');
        } else {
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $cek_login = $this->Pgn_model->login($email, $password);

            $this->db->where('email_pgn', $email);
            $this->db->where('pass_pgn', $password);

            $cek = $this->db->get('pengguna')->row();
            if (!empty($cek)) {
                $this->session->set_userdata('logined', true);
                $this->session->set_userdata('nama_pgn', $cek->nama_pgn);
                $this->session->set_userdata('email_pgn', $cek->email_pgn);
                $this->session->set_userdata('sts_pgn', $cek->sts_pgn);

                if ($this->session->userdata('sts_pgn') == 'ADMIN') {
                    redirect("Admin/Admin_ctrl");
                } else if ($this->session->userdata('sts_pgn') == 'USER') {
                    redirect('Member_ctrl');
                }
            } else {
                redirect("login/login");
            }
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('logined');
        redirect("/");
    }
}
