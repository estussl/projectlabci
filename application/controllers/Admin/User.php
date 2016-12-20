<?php
class User extends CI_Controller{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_user');
		if($this->session->userdata('id_jenis_user') <> '0')
		{
			redirect('login');
		}
	}


	function index()
	{
		$data['record']= $this->Model_user->tampilkan_data();
		$data['contents'] = $this->load->view('Admin/list_user_admin', $data, TRUE);
		$this->load->view('templatecontentadmin', $data);
	}

	function post()
	{

		if(isset($_POST['submit'])){
			$this->Model_user->post();
			redirect('Admin/User');
		}
		else
		{
         $data['element'] = array(
            'nis' => array('placeholder' => 'NIS', 'name' => 'nis'),
            'nip' => array('placeholder' => 'NIP', 'name' => 'nip'),
            'username' => array('placeholder' => 'Username', 'name' => 'username'),
            'password' => array('placeholder' => 'Password', 'name' => 'password'),
            'id_jenis_user' => array('placeholder' => 'Jenis User', 'name' => 'id_jenis_user')
         );

			$data['buka_form'] = 'Admin/User/post';
			$data['judul_form'] = 'Tambah Data User';
			$this->template->load('templatecontentadmin','Admin/form_input_user', $data);
		}
	}


	function edit($kunci)
	{
		if(isset($_POST['submit']))
		{
			$this->Model_user->edit();
			redirect('Admin/User');
		}
		else
		{
			$data['element'] = array(
            'kunci' => array('placeholder' => 'Kunci', 'name' => 'kunci'),
            'nis' => array('placeholder' => 'NIS', 'name' => 'nis'),
            'nip' => array('placeholder' => 'NIP', 'name' => 'nip'),
            'username' => array('placeholder' => 'Username', 'name' => 'username'),
            'password' => array('placeholder' => 'Password', 'name' => 'password'),
            'id_jenis_user' => array('placeholder' => 'Jenis User', 'name' => 'id_jenis_user')
         );

			$data['buka_form'] = 'Admin/User/edit';
			$data['record']=$this->Model_user->get_satu_user($kunci)->row_array();
			$data['judul_form'] = 'Edit Data User';
			$this->template->load('templatecontentadmin','Admin/form_edit_user',$data);
		}
}


	function delete($kunci)
	{
		$this->Model_user->delete($kunci);
		redirect('Admin/User');
	}

}
?>
