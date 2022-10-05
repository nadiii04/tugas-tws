<?php

class Model_album extends CI_Model
{
    public function get()
    {
        return $this->db->get('tb_album');
    }

    public function tambah($data,$table)
    {
        $this->db->insert($table,$data);
    }

    public function hapus($where,$table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}