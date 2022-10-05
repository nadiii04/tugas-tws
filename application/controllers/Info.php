<?php

class Info extends CI_Controller
{
    public function edit($id)
    {
        $where = array('id'=>$id);
        $data['info'] = $this->model_info->edit($where, 'tb_info')->result();
        $this->load->view('templates_admin/headers');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/edit_info', $data);
        $this->load->view('templates_admin/footer');
    }

    public function update()
    {
        $id                     = $this->input->post('id');
        $judul            = $this->input->post('judul');
        $tanggal             = $this->input->post('tanggal');
        $kategori               = $this->input->post('kategori');

        $data = array(

            'judul'     => $judul,
            'tanggal'        => $tanggal,
            'kategori'  => $kategori,
        );

        $where = array(
            'id'    => $id
        );

        $this->model_info->update($where, $data, 'tb_info');
        redirect('admin/data_info');
    }

    public function tambah()
    {
        $judul    = $this->input->post('judul');
        $tanggal     = $this->input->post('tanggal');
        $kategori     = $this->input->post('kategori');

        $data = array(
            'judul'   => $judul,
            'tanggal'    => $tanggal,
            'kategori'    => $kategori,

        );

        $this->model_info->tambah($data, 'tb_info');
        redirect('admin/data_info');
    }

    public function hapus($id)
    {
        $where = array('id' => $id);
        $this->model_info->hapus($where, 'tb_info');
        redirect('admin/data_info');
    }
}