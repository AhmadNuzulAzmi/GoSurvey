<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Password_ctrl extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        if (!$this->session->userdata('email')) {
            redirect('Login/Auth');
        }
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('tbl_user', ['email_usr' =>
        $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('pass_lama', 'Password Lama', 'required|trim', [
            'required' => 'Masukkan Password Lama Anda!'
        ]);

        $this->form_validation->set_rules('pass_baru1', 'Password Baru', 'required|trim|min_length[3]', [
            'required' => 'Masukkan Password Baru Anda!',
            'min_length' => 'Minimal Password 3 Karakter!'
        ]);

        $this->form_validation->set_rules('pass_baru2', 'Repeate Password', 'required|trim|min_length[3]|matches[pass_baru1]', [
            'required' => 'Masukkan Repeat Password Baru Anda!',
            'min_length' => 'Minimal Password 3 Karakter!',
            'matches' => 'Repeate Password yang anda masukkan tidak sama dengan password yg diatas!'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('Member/UI/Header', $data);
            $this->load->view('Login/ViewChange_pass');
            $this->load->view('Member/UI/Footer');
        } else {
            $pass_lama = $this->input->post('pass_lama');
            $pass_baru = $this->input->post('pass_baru1');

            if (!password_verify($pass_lama, $data['user']['password_usr'])) {
                //Jika password lama tidak sama denga yg didatabase
                $this->session->set_flashdata('message', '<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                </symbol>
                <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                </symbol>
                <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                </symbol>
                </svg>

                <div class="alert alert-danger d-flex align-items-center" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24"><use xlink:href="#exclamation-triangle-fill"/></svg>
                <div>
                Password Lama Anda Salah!!
                </div>
                </div>');
                redirect('Member/Password_ctrl');
            } else {
                if ($pass_lama == $pass_baru) {
                    //Jika password baru sama dengan password lama
                    $this->session->set_flashdata('message', '<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                    <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                    </symbol>
                    <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                    </symbol>
                    <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                    </symbol>
                    </svg>

                    <div class="alert alert-danger d-flex align-items-center" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24"><use xlink:href="#exclamation-triangle-fill"/></svg>
                    <div>
                    Password Baru Tidak Boleh Sama Dengan Password Lama!!
                    </div>
                    </div>');
                    redirect('Member/Password_ctrl');
                } else {
                    //password Oke
                    $password_hash = password_hash($pass_baru, PASSWORD_DEFAULT);

                    $this->db->set('password_usr', $password_hash);
                    $this->db->where('email_usr', $this->session->userdata('email'));
                    $this->db->update('tbl_user');

                    $this->session->set_flashdata('message', '<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                    <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                    </symbol>
                    <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                    </symbol>
                    <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                    </symbol>
                    </svg>

                    <div class="alert alert-success d-flex align-items-center" role="alert" pl-3>
                        <svg class="bi flex-shrink-0 me-2" width="24" height="24"><use xlink:href="#check-circle-fill"/></svg>
                
                    <div pl-3>
                        Anda Berhasil Mengganti Password!
                    </div>
                    </div>');
                    redirect('Member/Password_ctrl');
                }
            }
        }
    }
}
