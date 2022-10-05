<?php

class Admin extends CI_Controller
{
    public function login()
    {
        
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run() == FALSE) 
        {
            $this->load->view('login');

        } else {
            $auth = $this->model_auth->cek_login();

            if ($auth == FALSE)
            {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">Username atau Password Anda Salah !
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"<span aria-hidden="true">&times;</span></button>
                </div>');
                redirect('admin/login');
            } else {
                $this->session->set_userdata('username', $auth->username);
                $this->session->set_userdata('role_id', $auth->role_id);

                switch ($auth->role_id) {
                    case '1':
                        redirect('admin/dashboard_admin');
                        break;

                    case '2':
                        redirect('welcome');
                        break;
                    default:
                        break;
                }
            }
        }
    }

    public function dashboard_admin()
    {
        $this->load->view('templates_admin/headers');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/dashboard_admin');
        $this->load->view('templates_admin/footer');
    }

    public function data_info()
    {
        $data['info'] = $this->model_info->get_info()->result();
        $this->load->view('templates_admin/headers');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_info',$data);
        $this->load->view('templates_admin/footer');
    }
    public function data_album()
    {
        $data['album'] = $this->model_album->get()->result();
        $this->load->view('templates_admin/headers');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_album',$data);
        $this->load->view('templates_admin/footer');
    }
}