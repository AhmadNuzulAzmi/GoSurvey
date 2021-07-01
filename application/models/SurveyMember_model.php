<?php
class SurveyMember_model extends CI_Model
{
    public $table = 'tbl_task';
    public $id = 'id_task';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    public function insert($data)
    {
        $this->db->insert('tbl_task', $data);
        $this->db->insert('tbl_option_soal', $data);
    }

    public function get_by_id($id)
    {
        $this->db->where('id_soal', $id);
        return $this->db->get('tbl_soal')->row();
    }


    public function select_task($id_user)
    {
        return $this->db->query('select a.id_task, a.judul_task, a.desk_task, a.jmlrespon_task, a.total_nominal, a.nominal_task, a.bukti, a.pembayaran, a.status from tbl_task a, tbl_user b where a.id_usr = b.id_usr and a.id_usr ="' . $id_user . '" 
        order by id_task desc limit 10')->result();
    }

    public function survey_activ($id_user)
    {
        return $this->db->query('select b.id_task, b.judul_task, b.desk_task, b.jmlrespon_task, b.filter, b.nominal_task, b.status, a.id_usr, a.nama_usr from tbl_user a, tbl_task b where a.id_usr = b.id_usr and a.id_usr !="' . $id_user . '" 
        ')->result();
    }

    public function survey_byid($id_user)
    {
        return $this->db->query('select b.id_task, b.judul_task, b.desk_task, b.nominal_task, b.total_nominal, b.status, b.jmlrespon_task, a.nama_usr from tbl_user a, tbl_task b where a.id_usr = b.id_usr and a.id_usr ="' . $id_user . '" 
        ')->result();
    }

    public function survey_byidtask($id_task)
    {
        return $this->db->query('select total_nominal from tbl_task  where id_task ="' . $id_task . '" ')->row_array();
    }

    public function task_byidtask($id_task)
    {
        return $this->db->query('select judul_task from tbl_task  where id_task ="' . $id_task . '" ')->result();
    }

    public function jml_jawaban($id_task)
    {
        return $this->db->query('select count(id_jwb) as id_jwb from tbl_jawaban  where id_task ="' . $id_task . '" ')->row_array();
    }

    public function jml_task($id_user)
    {
        return $this->db->query('select count(a.id_task) as id_task from tbl_task a, tbl_user b where a.id_usr = b.id_usr and a.id_usr != "' . $id_user . '"')->row_array();
    }

    public function jml_done($id_user)
    {
        return $this->db->query('select count(a.id_jwb) as id_jwb from tbl_jawaban a, tbl_user b, tbl_task c where a.id_usr = b.id_usr and a.id_usr = "' . $id_user . '" and a.id_task = c.id_task and c.jmlrespon_task != 0 and c.total_nominal')->row_array();
    }

    public function buat_soal($data)
    {
        $this->db->insert('tbl_soal', $data);
        $insert_id = $this->db->insert_id();

        return  $insert_id;
    }

    public function buat_soal_option($data)
    {
        $this->db->insert('tbl_option_soal', $data);
    }

    public function tampil_jawaban()
    {
        return $this->db->query('select * from tbl_jawaban')->result();
    }

    public function tampil_idjawaban()
    {
        return $this->db->query('SELECT id_usr from tbl_jawaban GROUP BY id_usr')->result();
    }

    public function soal_option($id_task)
    {
        return $this->db->query('select * from tbl_option_soal where id_task = "' . $id_task . '"')->result();
    }

    public function tampil_soal($id_task)
    {
        return $this->db->query('select * from tbl_soal where id_task = "' . $id_task . '"')->result();
    }

    public function tampil_soall()
    {
        return $this->db->query('select soal from tbl_soal')->result();
    }

    public function tampil_semuasoal()
    {
        return $this->db->query('select * from tbl_soal')->result();
    }

    public function tampil_idtask()
    {
        return $this->db->query('SELECT id_task from tbl_soal GROUP BY id_task;')->result();
    }

    public function jawab_soal($data)
    {
        $this->db->insert('tbl_jawaban', $data);
    }

    public function tampil_profil($id_user)
    {
        return $this->db->query('select a.id_usr, a.jenkel, a.pekerjaan, a.jml_penghasilan, a.gol_darah, a.gadget, a.merokok from tbl_profil a, tbl_user b where a.id_usr = b.id_usr and a.id_usr ="' . $id_user . '" 
        ')->result();
    }

    public function tampil_filter($id_task)
    {
        return $this->db->query('select a.id_usr, a.id_task, a.jenkel, a.usia_dari, a.usia_sampai, a.pekerjaan, a.penghasilan, a.gol_darah, a.gadget, a.merokok from tbl_filter a, tbl_task b where a.id_task = b.id_usr and a.id_task ="' . $id_task . '" 
        ')->result();
    }

    public function tampil_filter1()
    {
        return $this->db->query('select * from tbl_filter')->result();
    }

    public function tampil_alltask()
    {
        return $this->db->query('select * from tbl_task')->result();
    }

    public function jawaban($id_task)
    {
        return $this->db->query('select a.id_jwb, a.id_usr, a.id_task, a.jawaban, b.nama_usr from 
        tbl_jawaban a, tbl_user b where a.id_usr = b.id_usr and id_task = "' . $id_task . '"')->result();
    }

    public function cek_jawaban($id_user, $id_task)
    {
        return $this->db->query('select * from tbl_jawaban a, tbl_user b where a.id_usr = b.id_usr 
        and a.id_usr = "' . $id_user . '" and a.id_task = "' . $id_task . '"')->num_rows();
    }

    public function cocok($id_user)
    {
        return $this->db->query('select a.id_usr, b.id_usr, b.id_task from tbl_profil a, tbl_filter b where a.id_usr = b.id_usr and a.id_usr ="' . $id_user . '"')->result();
    }
}
