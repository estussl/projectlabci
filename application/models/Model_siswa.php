<?php
class Model_siswa extends CI_Model{

	function tampilkan_data(){
		return $this->db->get('siswa');
	}

	function ambil_data_nilai($nis)
	{
		$sql = 'select s.nis, s.nama, n.* from nilai n, siswa s where s.nis = ' . $nis . ' and n.nis = s.nis';
		return $this->db->query($sql);
	}

	function ambil_judul_kolom()
	{
		return $this->db->list_fields('nilai');
	}

	function get_konten_tabel_mapel()
	{
		return $this->db->get('mata_pelajaran');
	}

	function get_tabel_user()
	{
		return $this->db->get('user');
	}

	function get_tabel_nilai()
	{
		$this->db->select('nis');
		return $this->db->get('nilai');
	}

	function daftarkan_siswa($nis)
	{
		$data_user_siswa = array(
			'nis' => $nis,
			'username' => $nis,
			'password' => $nis,
			'id_jenis_user' => 1
 		);

		$this->db->insert('user', $data_user_siswa);

		$data_nilai_siswa = array(
			'nis' => $nis
		);

		$this->db->insert('nilai', $data_nilai_siswa);

	}

	function drop_siswa($nis)
	{
		$this->db->where('nis', $nis);
		$this->db->delete('user');

		$this->db->where('nis', $nis);
		$this->db->delete('nilai');
	}

	function post()
	{
		$this->load->helper('tanggal');	// Load helper buat fungsi konversi tanggal ke format yang dikenali db

		// Capture data dari form
		$nama = $this->input->post('nama');
      $alamat = $this->input->post('alamat');
      $tempat_lahir = $this->input->post('tmpt_lahir');
      $tanggal_lahir = formatTanggalDB($this->input->post('tgl_lahir'));
      $jenis_kelamin = $this->input->post('jenis_kelamin');
      $email = $this->input->post('email');
      $tahun_masuk = date("Y");

		$this->load->helper('nis');
		$this->db->from('siswa');
		$urutan_siswa = $this->db->get()->num_rows();	// Mendapatkan urutan siswa dalam tabel
		if($urutan_siswa > 0)
		{
			$temp = $this->db->select('nis')->order_by('nis',"desc")->limit(1)->get('siswa')->row();
			$urutan_temp = substr($temp->nis, -3, 3);
			settype($urutan_temp, "integer");
			$urutan_siswa = $urutan_temp;
		}

		$nis = generateNIS($tahun_masuk, $urutan_siswa);	// Membangkitkan NIS untuk siswa yang mendaftar
		// echo $nis;

      $data = array('nis' => $nis,
							'nama' => $nama,
                     'alamat' => $alamat,
                     'tmpt_lahir' => $tempat_lahir,
                     'tgl_lahir' => $tanggal_lahir,
                     'jenis_kelamin' => $jenis_kelamin,
                     'email' => $email,
                     'thn_masuk' => $tahun_masuk
                     );

		$cek_insert = $this->db->insert('siswa', $data);

		if($cek_insert)
		{
			return true;
		}
	}

	function edit($nis)
	{
		$data = array(
           'nama'=> $this->input->post('nama'),
           'alamat'=> $this->input->post('alamat'),
           'tmpt_lahir	'=> $this->input->post('tmpt_lahir'),
           'tgl_lahir	'=> $this->input->post('tgl_lahir'),
           'jenis_kelamin'=> $this->input->post('jenis_kelamin'),
           'email'=> $this->input->post('email'),
           'thn_masuk'=> $this->input->post('thn_masuk'),
        );

       $this->db->where('nis',$this->input->post('nis'));
       $this->db->update('siswa',$data);
	}

	function get_one($nis)
	{
		$this->db->where('nis', $nis);
		return $this->db->get('siswa');
	}

	function delete($nis)
	{
		$this->db->where('nis', $nis);
		$this->db->delete('siswa');
	}
}
