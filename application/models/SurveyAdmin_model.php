<?php
class SurveyAdmin_model extends CI_Model
{
    public $table = 'tbl_soal';
    public $id = 'id_soal';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    public function insert($data)
    {
        $this->db->insert('tbl_soal', $data);
        $this->db->insert('tbl_option_soal', $data);
    }

    public function get_by_id($id)
    {
        $this->db->where('id_soal', $id);
        return $this->db->get('tbl_soal')->row();
    }

    public function select_srvy()
    {
        return $this->db->query('select * from tbl_task a, tbl_user b where  a.jmlrespon_task != 0 and a.total_nominal != 0 and a.id_usr = b.id_usr order by a.id_task desc')->result();
    }

    public function select_srvydone()
    {
        return $this->db->query('select * from tbl_task a, tbl_user b where a.status = "verified" and a.jmlrespon_task = 0 and a.total_nominal != 0 and a.id_usr = b.id_usr')->result();
    }

    public function select_saldo($id_user)
    {
        return $this->db->query('select nominal_saldo from tbl_saldo where id_usr = "' . $id_user . '"')->result();
    }

    public function select_topup()
    {
        return $this->db->query('select a.id, a.tgl_topup,a.jml_topup,a.bukti,a.transaksi,a.status,b.nama_usr from tbl_topup a, 
        tbl_user b where a.id_usr=b.id_usr order by id desc')->result();
    }

    public function select_tarik()
    {
        return $this->db->query('select a.id, a.tgl_tarik, a.jml_tarik, a.transaksi, a.pembayaran, a.ats_nama, a.bukti, a.no_rek, a.status, b.nama_usr from tbl_tarik a, tbl_user b where a.id_usr=b.id_usr order by id desc')->result();
    }

    public function edit_verifpembayaran($data, $id)
    {
        $this->db->update('tbl_task', $data, array('id_task' => $id));
        return ($this->db->affected_rows() > 0) ? TRUE : FALSE;
    }

    public function edit_veriftopup($data, $id)
    {
        $this->db->update('tbl_topup', $data, array('id' => $id));
        return ($this->db->affected_rows() > 0) ? TRUE : FALSE;
    }

    public function edit_saldo($data, $id)
    {
        $this->db->update('tbl_topup', $data, array('id' => $id));
        return ($this->db->affected_rows() > 0) ? TRUE : FALSE;
    }

    public function edit_riwayat($data, $id)
    {
        $this->db->update('tbl_riwayat', $data, array('id' => $id));
        return ($this->db->affected_rows() > 0) ? TRUE : FALSE;
    }

    public function edit_riwayattarik($data, $id)
    {
        $this->db->update('tbl_riwayat', $data, array('id' => $id));
        return ($this->db->affected_rows() > 0) ? TRUE : FALSE;
    }

    public function edit_veriftarik($data, $id)
    {

        $this->db->update('tbl_tarik', $data, array('id' => $id));
        return ($this->db->affected_rows() > 0) ? TRUE : FALSE;
    }

    public function jml_user($id_user)
    {
        return $this->db->query('select count(id_usr) as id_usr from tbl_user  where id_usr != "' . $id_user . '"')->row_array();
    }

    public function jml_task()
    {
        return $this->db->query('select count(id_task) as id_task from tbl_task where status="verified" and jmlrespon_task!=0')->row_array();
    }

    public function jml_taskdone()
    {
        return $this->db->query('select count(id_task) as id_task from tbl_task where status="verified" and jmlrespon_task=0')->row_array();
    }

    public function insert_riwayat($data)
    {
        $this->db->insert('tbl_riwayat', $data);
    }
}
