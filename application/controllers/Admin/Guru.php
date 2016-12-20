<?php
class Guru extends CI_Controller{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_guru');
		if($this->session->userdata('id_jenis_user') <> '0')
		{
			redirect('login');
			}
	}


	function index()
	{
		$data['record']= $this->Model_guru->tampilkan_data();
		$data['user'] = $this->Model_guru->get_tabel_user();
		$data['mata_pelajaran'] = $this->Model_guru->get_mata_pelajaran();
		$data['contents'] = $this->load->view('Admin/list_guru_admin', $data, TRUE);
		$this->load->view('templatecontentadmin', $data);
	}

	function validasi($nip)
	{
		$this->Model_guru->daftarkan_guru($nip);
		redirect('Admin/Guru');
	}

	function unvalidate($nip)
	{
		$this->Model_guru->drop_user_guru($nip);
		redirect('Admin/Guru');
	}

	function post()
	{

		if(isset($_POST['submit'])){
			$this->Model_guru->post();
			redirect('Admin/Guru');
		}
		else
		{
			$data['element'] = array(
            //'nis' => array('placeholder' => 'NIS', 'name' => 'nis'),
            'nama' => array('placeholder' => 'Nama', 'name' => 'nama'),
            'ni' => array('placeholder' => 'NIP', 'name' => 'nip'),
            'pend_terakhir' => array('placeholder' => 'Pendidikan Terakhir', 'name' => 'pend_terakhir'),
            'mata_pelajaran' => array('placeholder' => 'Mata Pelajaran', 'name' => 'mata_pelajaran')
         );
			$data['buka_form'] = 'Admin/Guru/post';
			$data['judul_form'] = 'Tambah Data Guru';
			$data['mata_pelajaran'] = $this->Model_guru->get_mata_pelajaran();
			$this->template->load('templatecontentadmin','Admin/form_input', $data);
		}
	}


	function edit($nip)
	{
		if(isset($_POST['submit']))
		{
			$this->Model_guru->edit();
			redirect('Admin/Guru');
		}
		else
		{
			$data['element'] = array(
            'nama' => array('placeholder' => 'Nama', 'name' => 'nama'),
            'ni' => array('placeholder' => 'NIP', 'name' => 'nip'),
            'pend_terakhir' => array('placeholder' => 'Pendidikan Terakhir', 'name' => 'pend_terakhir'),
            'mata_pelajaran' => array('placeholder' => 'Mata Pelajaran', 'name' => 'mata_pelajaran')
         );

			$data['buka_form'] = 'Admin/Guru/edit';
			$data['record']=$this->Model_guru->get_one($nip)->row_array();
			$data['judul_form'] = 'Edit Data Guru';
			$data['mata_pelajaran'] = $this->Model_guru->get_mata_pelajaran();
			$this->template->load('templatecontentadmin','Admin/form_edit',$data);
		}
}


	function delete($nip)
	{
		$this->Model_guru->delete($nip);
		redirect('Admin/Guru');
	}

}
