<?php
class Model_user extends CI_Model{

	function tampilkan_data()
	{
		return $this->db->get('user');
	}

	function edit()
	{
		$data = array(
	        'nis'=> $this->input->post('nis'),
	        'nip'=> $this->input->post('nip'),
	        'username'=> $this->input->post('username'),
	        'password'=> $this->input->post('password'),
	        'id_jenis_user'=> $this->input->post('id_jenis_user')
	     );

	    $this->db->where('kunci',$this->input->post('kunci'));
	    $this->db->update('user',$data);
	}

	function get_satu_user($kunci)
	{
		$this->db->where('kunci', $kunci);
		return $this->db->get('user');
	}

	// function ambil_data_nilai($nis)
	// {
	// 	$sql = 'select s.nis, s.nama, n.* from nilai n, siswa s where s.nis = ' . $nis . ' and n.nis = s.nis';
	// 	return $this->db->query($sql);
	// }
   //
	// function ambil_judul_kolom()
	// {
	// 	return $this->db->list_fields('nilai');
	// }
   //
	function post()
	{

		// Capture data dari form
		$nis = $this->input->post('nis');
      $nip = $this->input->post('nip');
      $username = $this->input->post('username');
      $password = $this->input->post('password');
      $id_jenis_user = $this->input->post('id_jenis_user');

      $data = array('nis' => $nis,
							'nip' => $nip,
                     'username' => $username,
                     'password' => $password,
                     'id_jenis_user' => $id_jenis_user
                     );

		$cek_insert = $this->db->insert('user', $data);

		if($cek_insert)
		{
			return true;
		}
	}

	function delete($kunci)
	{
		$this->db->where('kunci', $kunci);
		$this->db->delete('user');
	}
}
