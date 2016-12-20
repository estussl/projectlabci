<?php
class Admin extends CI_Controller{
	function __construct()
	{
		parent::__construct();
		if($this->session->userdata('id_jenis_user') <> '0')
		{
			redirect('login');
		}
	}

	public function index()
	{
		$d['title'] = 'Login';
		$d['judul'] = 'Login Multiuser Codeigniter dengan Mysql';
		$d['username'] = $this->session->userdata('username');
		$d['page'] = 'admin';
		$this->load->view('Admin/home', $d);
	}
}
