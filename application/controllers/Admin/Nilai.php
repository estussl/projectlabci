<?php
class Nilai extends CI_Controller{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_nilai');
		if($this->session->userdata('id_jenis_user') <> '0')
		{
			redirect('login');
		}
	}


	function index()
	{

      $data['siswa'] = $this->Model_nilai->get_semua_siswa();
      $data['nilai'] = $this->Model_nilai->get_semua_nilai();
		$data['contents'] = $this->load->view('Admin/list_siswa_nilai_admin', $data, TRUE);
		$this->load->view('templatecontentadmin', $data);
	}

   function get_one($nis)
   {
      $data['record'] = $this->Model_nilai->get_satu_data_nilai($nis);
		$data['nis_edit'] = $nis;
		$data['mata_pelajaran'] = $this->Model_nilai->get_semua_nama_mata_pelajaran();
      $data['nama_mapel'] = $this->Model_nilai->get_semua_matkul();
      $data['contents'] = $this->load->view('Admin/list_nilai_admin', $data, TRUE);
      $this->load->view('templatecontentadmin', $data);
   }

   function verifikasi_siswa($nis)
   {
      $this->Model_nilai->tambah_siswa_ke_nilai($nis);
      redirect('Admin/Nilai');
   }

	function edit($nis)
	{
		if(isset($_POST['submit']))
		{
			$this->Model_nilai->update_nilai();
			redirect('Admin/Nilai/get_one/' . $this->input->post('nis'));
		}
		else
		{
			
         // Array element untuk mendefinisikan input teks apa saja yang ada di view
			$data['element'] = array(
						"pem_desktop" => array('placeholder' => 'Pemrogramman Desktop', 'name' => 'pem_desktop'),
						"pbo" => array('placeholder' => 'Pemrogramman Berbasis Objek', 'name' => 'pbo'),
						"jarkom" => array('placeholder' => 'Jaringan Komputer', 'name' => 'jarkom'),
						"pem_web" => array('placeholder' => 'Pemrogramman Web', 'name' => 'pem_web'),
						"pem_mobile" => array('placeholder' => 'Pemrogramman Mobile', 'name' => 'pem_mobile'),
						"leg_aspek" => array('placeholder' => 'Legal Aspek Produk TIK', 'name' => 'leg_aspek'),
						"pem_multimedia" => array('placeholder' => 'Pemrogramman Multimedia', 'name' => 'pem_multimedia'),
						"bisnis_tik" => array('placeholder' => 'Bisnis TIK', 'name' => 'bisnis_tik'),
						"bhs_ing_bisnis" => array('placeholder' => 'Bahasa Inggris Bisnis', 'name' => 'bhs_ing_bisnis'),
						"komp_modern" => array('placeholder' => 'Komputasi Modern', 'name' => 'komp_modern'),
						"dasar_pemasaran" => array('placeholder' => 'Dasar Pemasaran', 'name' => 'dasar_pemasaran'),
						"kewirausahaan" => array('placeholder' => 'Kewirausahaan', 'name' => 'kewirausahaan'),
						"perilaku_konsumen" => array('placeholder' => 'Perilaku Konsumen', 'name' => 'perilaku_konsumen'),
						"man_proyek" => array('placeholder' => 'Manajemen Proyek', 'name' => 'man_proyek'),
						"etika_bisnis" => array('placeholder' => 'Etika Bisnis', 'name' => 'etika_bisnis'),
						"stat_dasar" => array('placeholder' => 'Statistika Dasar', 'name' => 'stat_dasar'),
						"imd" => array('placeholder' => 'Interactive Media Design', 'name' => 'imd'),
						"graphic_design" => array('placeholder' => 'Graphic Design', 'name' => 'graphic_design'),
						"konsep_tek" => array('placeholder' => 'Konsep Teknologi', 'name' => 'konsep_tek'),
			);
			$data['buka_form'] = 'Admin/Nilai/edit';
			$data['judul_form'] = 'Edit Nilai Siswa';
			$data['record'] = $this->Model_nilai->get_satu_data_nilai($nis)->row_array();
			$this->template->load('templatecontentadmin','Admin/form_edit_nilai',$data);
		}
	}


}
?>
