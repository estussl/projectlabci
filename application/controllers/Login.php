<?php

class Login extends CI_Controller{

	public function index(){
		$data['title'] = 'Login';
		$data['judul'] = 'Silahkan Login';
		$this->load->view('login', $data);
	}

	function masuk()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$cek = $this->model_login->cek($username, $password);
		if($cek->num_rows() == 1)
		{
			foreach($cek->result() as $data){
				if(isset($data->nis))
				{
					$sess_data['nis'] = $data->nis;
				}
				else
					$sess_data['nis'] = $data->nip;
					
				$sess_data['username'] = $data->username;
				$sess_data['id_jenis_user'] = $data->id_jenis_user;

				$this->session->set_userdata($sess_data);
			}

			if($this->session->userdata('id_jenis_user') == '0')
			{
				redirect('Admin/Admin');
			}
			elseif($this->session->userdata('id_jenis_user') == '1')
			{
				redirect('Siswa');
			}
			elseif($this->session->userdata('id_jenis_user') == '2')
			{
				redirect('Guru');
			}
		}
		else
		{
			$this->session->set_flashdata('pesan', 'Maaf, kombinasi username dengan password salah.');
			redirect('login');
		}
	}

	function keluar()
	{
		$this->session->sess_destroy();
		redirect('');
	}
}
