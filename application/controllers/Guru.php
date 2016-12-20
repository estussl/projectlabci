<?php
// class Guru extends CI_Controller{
//
// 	function __construct(){
// 		parent::__construct();
// 		$this->load->model('Model_guru');
//
// 		if($this->session->userdata('id_jenis_user') <> '2')
// 		{
// 			redirect('login');
// 		}
// 	}
//
//
//
// 	function index(){
// 		//$data['record']= $this->Model_guru->tampilkan_data();
// 		//$this->template->load('templatecontent','list_guru', $data);
//       $data['username'] = $this->session->userdata('username');
//   		$data['jenis_user'] = $this->session->userdata('id_jenis_user');
//
// 		$data['contents'] = $this->load->view('content/home_guru', '', TRUE);
// 		$this->load->view('template/template_publik', $data);
// 	}
// }

class Guru extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('Model_guru');

		if($this->session->userdata('id_jenis_user') <> '2')
		{
			redirect('login');
		}
	}



	function index(){
		$data['record']= $this->Model_guru->tampilkan_data();
		//$this->template->load('templatecontent','list_guru', $data);
      $data['username'] = $this->session->userdata('username');
  		$data['jenis_user'] = $this->session->userdata('id_jenis_user');

  		$this->load->helper('text');
  		$this->load->model('Model_pengumuman');
    	$data['record']= $this->Model_pengumuman->tampilkanData();


    	//$this->template->load('templatecontentadmin','content/home_guru', $data);
		$data['contents'] = $this->load->view('content/home_guru', $data, TRUE);
		$this->load->view('template/template_publik', $data);
	}

	function gurupost(){
		$data['nis']=$this->session->userdata('nis');
		$data['nama_kolom'] = $this->Model_guru->get_mata_pelajaran_guru($this->session->userdata('nis'));
		$data['username']= $this->session->userdata('username');
		$data['jenis_user']=$this->session->userdata('id_jenis_user');
		$nama_kolom = $this->Model_guru->get_mata_pelajaran_guru($this->session->userdata('nis'));
		$data['daftar_nilai']=$this->Model_guru->get_nilai_dan_siswa($nama_kolom->row_array()['nm_kolom']) ;
		$this->template->load('template/template_publik','kumpulan_nilai_siswa', $data);



	}
	function perbaharui_nilai($nis='',$kolomx='',$nilai=''){
		//$nis = $this->uri->segment(5);
		// $nis = $this->input->get('nis');
		// $data['kolomx'] = $this->input->get('kolom');
		//echo $kolom;
		$data['username']= $this->session->userdata('username');
		$data['jenis_user']=$this->session->userdata('id_jenis_user');
		if(isset($_POST['submit']))
		{
			$this->Model_guru->update_nilai($kolomx);
			redirect('Guru/gurupost');
		}
		else
		{
				$data['element']=array(
					$kolomx => array('placeholder'=> 'Masukkan Nilai', 'name' => 'nilai_siswa'));


				$data['nis']=$nis;
				$data['nama_kolom'] = $kolomx;
				$data['buka_form']= 'Guru/perbaharui_nilai';
				$data['judul_form']= 'Input Nilai Siswa';
				if (isset($nilai))
				{
					$data['nilai']=$nilai;
				}

				$this->template->load('template/template_publik','form_input_nilai', $data);
				}
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

?>
