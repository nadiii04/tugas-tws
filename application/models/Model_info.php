<?php

class Model_info extends CI_Model
{
    public function get_info()
    {
       return $this->db->get('tb_info');
    }
}