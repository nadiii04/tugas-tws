<?php

class Model_info extends CI_Model
{
    public function get_info()
    {
       return $this->db->get('tb_info');
    }

    public function edit($where, $table)
    {
        return $this->db->get_where($table,$where);
    }

    public function update($where,$data,$table)
    {
        $this->db->where($where);
        $this->db->update($table,$data);
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