<?php
class Model_nilai extends CI_Model{

	function tampilkan_data($nis){
		$query="SELECT S.nis,S.nama,N.java_beg,N.php_beg,N.phyton_beg,S.thn_masuk
				FROM tb_nilai as N, tb_siswa as S
				 WHERE S.nis='$nis' AND N.nis=S.nis  ";
		// $query = "select * from tb_nilai where nis='$nis'";
				 return $this->db->query($query);
	}

	function get_satu_data_nilai($nis)
	{
		$sql = "select s.nis, s.nama, n.*
					from siswa as s, nilai as n
					where s.nis='$nis' and n.nis = s.nis";

		return $this->db->query($sql);
	}

	function get_semua_nilai()
	{
		$this->db->select('nis');
		return $this->db->get('nilai');
	}

	function get_semua_siswa()
	{
		return $this->db->get('siswa');
	}

	function get_semua_matkul()
	{
		return $this->db->list_fields('nilai');
	}

	function get_semua_nama_mata_pelajaran()
	{
		return $this->db->get('mata_pelajaran');
	}

	function tambah_siswa_ke_nilai($nis)
	{
		$data = array('nis' => $nis);
		$this->db->insert('nilai', $data);
	}

	function update_nilai()
	{
		$data = array(
					"pem_desktop" => $this->input->post('pem_desktop'),
					"pbo" => $this->input->post('pbo'),
					"jarkom" => $this->input->post('jarkom'),
					"pem_web" => $this->input->post('pem_web'),
					"pem_mobile" => $this->input->post('pem_mobile'),
					"leg_aspek" => $this->input->post('leg_aspek'),
					"pem_multimedia" => $this->input->post('pem_multimedia'),
					"bisnis_tik" => $this->input->post('bisnis_tik'),
					"bhs_ing_bisnis" => $this->input->post('bhs_ing_bisnis'),
					"komp_modern" => $this->input->post('komp_modern'),
					"dasar_pemasaran" => $this->input->post('dasar_pemasaran'),
					"kewirausahaan" => $this->input->post('kewirausahaan'),
					"perilaku_konsumen" => $this->input->post('perilaku_konsumen'),
					"man_proyek" => $this->input->post('man_proyek'),
					"etika_bisnis" => $this->input->post('etika_bisnis'),
					"stat_dasar" => $this->input->post('stat_dasar'),
					"imd" => $this->input->post('imd'),
					"graphic_design" => $this->input->post('graphic_design'),
					"konsep_tek" => $this->input->post('graphic_design'),
		);
		echo $this->input->post('jarkom');
		$nis = $this->input->post('nis');
		$this->db->where('nis', $nis);
		$this->db->update('nilai', $data);

	}

}
