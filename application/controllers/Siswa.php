<?php
class Siswa extends CI_Controller{
function __construct(){
		parent::__construct();
		if($this->session->userdata('id_jenis_user') <> '1')
		{
			redirect('login');
		}
		$this->load->model('Model_siswa');
	}


    function index(){
      $data['username'] = $this->session->userdata('username');
		$data['jenis_user'] = $this->session->userdata('id_jenis_user');
      // $d['username'] = $this->session->userdata('username');
		$data['page'] = 'user';


		$this->load->helper('text');
  		$this->load->model('Model_pengumuman');
    	$data['record']= $this->Model_pengumuman->tampilkanData();


		$data['contents'] = $this->load->view('content/home_siswa', $data, TRUE);
		$this->load->view('template/template_publik', $data);
       // $this->template->load('template','view_home');
    }

	 function lihat_nilai()
	 {
		   $data['username'] = $this->session->userdata('username');
		   $data['jenis_user'] = $this->session->userdata('id_jenis_user');
		 	$data['record']=$this->Model_siswa->ambil_data_nilai($this->session->userdata('nis'));
			$data['judul_kolom'] = $this->Model_siswa->ambil_judul_kolom();
			$data['mata_pelajaran'] = $this->Model_siswa->get_konten_tabel_mapel();
		 	$data['contents'] = $this->load->view('content/nilai_siswa',$data, TRUE);
			$this->load->view('template/template_publik', $data);
	 }

	 function lengkap(){
	 	$data['username'] = $this->session->userdata('username');
		   $data['jenis_user'] = $this->session->userdata('id_jenis_user');
    $id=$this->uri->segment(3);
    $this->load->model('Model_pengumuman');
    $data['record']=$this->Model_pengumuman->get_one($id);
    $this->template->load('template/template_publik','pengumuman_lengkap', $data);


    }
}
