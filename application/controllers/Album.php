<?php

class Album extends CI_Controller
{
    public function tambah()
    {
        $gambar         = $_FILES['gambar']['name'];
        if ($gambar = '') 
        {
        
        } else {
            $config['upload_path'] = 'uploads/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('gambar')) {
                echo "Gambar Gagal diUpload!";
            } else {
                $gambar = $this->upload->data('file_name');
            }
        }

        $data = array(
            'gambar'   => $gambar,

        );

        $this->model_album->tambah($data, 'tb_album');
        redirect('admin/data_album');
    }

    public function hapus($id)
    {
        $where = array('id' => $id);
        $this->model_album->hapus($where, 'tb_album');
        redirect('admin/data_album');
    }
}