<?php

class Model_keuangan extends CI_Model
{
    public function get()
    {
        return $this->db->get('tb_keuangan');
    }
}