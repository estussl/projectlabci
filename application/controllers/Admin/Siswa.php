<?php
class Siswa extends CI_Controller{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_siswa');
		if($this->session->userdata('id_jenis_user') <> '0')
		{
			redirect('login');
			}
	}


	function index()
	{
		$data['record']= $this->Model_siswa->tampilkan_data();

		// Untuk validasi
		$data['user'] = $this->Model_siswa->get_tabel_user();
		$data['nilai_siswa'] = $this->Model_siswa->get_tabel_nilai();


		$data['contents'] = $this->load->view('Admin/list_siswa_admin', $data, TRUE);
		$this->load->view('templatecontentadmin', $data);
	}

	function post()
	{
		if(isset($_POST['submit']))
		{
			$this->Model_siswa->post();
			redirect('Admin/Siswa');
		}
		else
      {
			// Array element untuk mendefinisikan input teks apa saja yang ada di view
         $data['element'] = array(
            'nama' => array('placeholder' => 'Nama', 'name' => 'nama'),
            'alamat' => array('placeholder' => 'Alamat', 'name' => 'alamat'),
            'tmpt_lahir' => array('placeholder' => 'Tempat Lahir', 'name' => 'tmpt_lahir'),
            'tgl_lahir' => array('placeholder' => 'Tanggal Lahir', 'name' => 'tgl_lahir'),
            'jenis_kelamin' => array('placeholder' => 'Jenis Kelamin', 'name' => 'jenis_kelamin'),
            'email' => array('placeholder' => 'Email', 'name' => 'email'),
         );

         $data['judul_form'] = 'Tambah Data Siswa';		// Definisikan judul view form_input
         $data['buka_form'] = 'Admin/Siswa/post';	// Definisikan form apa yang dibuka untuk method post
			$this->template->load('templatecontentadmin','Admin/form_input', $data);
      }
	}


	function edit($nis)
	{
		if(isset($_POST['submit']))
		{
			$this->Model_siswa->edit($nis);
			redirect('Admin/Siswa');
		}
		else
		{
			$data['record']=$this->Model_siswa->get_one($nis)->row_array();

         // Array element untuk mendefinisikan input teks apa saja yang ada di view
         $data['element'] = array(
            'ni' => array('placeholder' => 'NIS', 'name' => 'nis'),
            'nama' => array('placeholder' => 'Nama', 'name' => 'nama'),
            'alamat' => array('placeholder' => 'Alamat', 'name' => 'alamat'),
            'tmpt_lahir' => array('placeholder' => 'Tempat Lahir', 'name' => 'tmpt_lahir'),
            'tgl_lahir' => array('placeholder' => 'Tanggal Lahir', 'name' => 'tgl_lahir'),
            'jenis_kelamin' => array('placeholder' => 'Jenis Kelamin', 'name' => 'jenis_kelamin'),
            'email' => array('placeholder' => 'Email', 'name' => 'email'),
            'thn_masuk' => array('placeholder' => 'Tahun Masuk', 'name' => 'thn_masuk'),
         );
			$data['buka_form'] = 'Admin/Siswa/edit';
			$data['judul_form'] = 'Edit Data Siswa';
			$this->template->load('templatecontentadmin','Admin/form_edit',$data);
		}
}


	function delete($nis)
	{
		$this->Model_siswa->delete($nis);
		redirect('Admin/Siswa');
	}

	function validasi($nis)
	{
		$this->Model_siswa->daftarkan_siswa($nis);
		redirect('Admin/Siswa');
	}

	function unvalidate($nis)
	{
		$this->Model_siswa->drop_siswa($nis);
		redirect('Admin/Siswa');
	}

}
