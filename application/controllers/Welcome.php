<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	
	public function index()
	{
		$data['info'] = $this->model_info->get_info()->result();
		$this->load->view('index', $data);
	}

	public function keuangan()
	{
		$data['keuangan'] = $this->model_keuangan->get()->result();
		$this->load->view('keuangan',$data);
	}

	public function album()
	{
		$data['album'] = $this->model_album->get()->result();
		$this->load->view('album', $data);
	}

	public function anggota()
	{
		$data['anggota'] = $this->model_anggota->get()->result();
		$this->load->view('anggota', $data);
	}
}
