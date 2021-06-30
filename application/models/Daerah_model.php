<?php
class Daerah_model extends CI_Model
{
    function Provinsi()
    {
        $this->db->order_by('id_prov', 'ASC');
        return $this->db->from('provinsi')
            ->get()
            ->result();
    }

    function Kabupaten($id_provinsi)
    {
        $this->db->where('id_prov', $id_provinsi);
        $this->db->order_by('id_kab', 'ASC');
        return $this->db->from('kabupaten')
            ->get()
            ->result();
    }

    function Kecamatan($id_kabu)
    {
        $this->db->where('id_kab', $id_kabu);
        $this->db->order_by('id_kec', 'ASC');
        return $this->db->from('kecamatan')
            ->get()
            ->result();
    }

    function Kelurahan($id_kelu)
    {
        $this->db->where('id_kec', $id_kelu);
        $this->db->order_by('id_kel', 'ASC');
        return $this->db->from('kelurahan')
            ->get()
            ->result();
    }
}
