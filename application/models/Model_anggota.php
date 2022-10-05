<?php

class Model_anggota extends CI_Model
{
    public function get()
    {
        return $this->db->get('tb_anggota');
    }
}