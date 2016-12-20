<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_guru extends CI_Model{


	function tampilkan_data(){

	return $this->db->get('guru');
	}

	 function post(){
        $data=array(

           'nip'=> $this->input->post('nip'),
           'nama'=> $this->input->post('nama'),
           'pend_terakhir'=> $this->input->post('pend_terakhir'),
           'mata_pelajaran'=> $this->input->post('mata_pelajaran'),
                    );
        $this->db->insert('guru',$data);
    }

	 function get_mata_pelajaran()
	 {
		 return $this->db->get('mata_pelajaran');
	 }

    function get_one($nip){

      $param = array('nip'=>$nip);
      return $this->db->get_where('guru',$param);
    }

    function edit()
	 {
      $data=array(
         //   'nip'=> $this->input->post('nip'),
           'nama'=> $this->input->post('nama'),
           'pend_terakhir'=> $this->input->post('pend_terakhir'),
           'mata_pelajaran'=> $this->input->post('mata_pelajaran')
        );

		 // echo $this->input->post('mata_pelajaran');
      $this->db->where('nip',$this->input->post('nip'));
      $this->db->update('guru',$data);
    }


    function delete($nip)
	 {
      $this->db->where('nip',$nip);
      $this->db->delete('guru');
    }

	 function get_mata_pelajaran_guru($nip){


         $query="SELECT G.nip,G.mata_pelajaran,M.id,M.nm_kolom, M.nama_mapel
         FROM guru as G, mata_pelajaran as M
         WHERE G.nip=" . $nip .  " AND G.mata_pelajaran=M.id";
         return $this->db->query($query);
    }

    function get_nilai_dan_siswa($nm_kolom)
    {
      $sql = "SELECT S.nis,S.nama,N.nis,N" . "." . $nm_kolom . "
      FROM siswa as S, nilai as N
      WHERE N.nis=S.nis";
      return $this->db->query($sql);
    }

    function update_nilai(){
      $nis=$this->input->post('nis');
      $nm_kolom=$this->input->post('nm_kolom');
      //echo $nis . " " . $nm_kolom;

      $data=array($nm_kolom => $this->input->post('nilai_siswa'));
      $this->db->where('nis', $nis);
      $this->db->update('nilai',$data);

    }

    function get_tabel_user()
    {
      return $this->db->get('user');
    }

    function daftarkan_guru($nip)
    {
        $data = array(
          'nip' => $nip,
          'username' => $nip,
          'password' => $nip,
          'id_jenis_user' => 2
          );

        $this->db->insert('user', $data);
    }

    function drop_user_guru($nip)
    {
      $this->db->where('nip', $nip);
      $this->db->delete('user');
    }

}
