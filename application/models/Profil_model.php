<?php
class Profil_model extends CI_Model
{
    public $table = 'tbl_profil';
    public $id = 'id';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    public function isi_profil($data)
    {
        $this->db->insert('tbl_profil', $data);
    }
}
