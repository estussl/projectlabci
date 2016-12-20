<?php
class Model_pengumuman extends CI_Model{

    function tampilkanData(){
      $this->db->from('pengumuman');
      $this->db->order_by('id', 'desc');
    return $this->db->get();
    }

      function get_one($id){

      $param = array('id'=>$id);
      return $this->db->get_where('pengumuman',$param);
    }

    function post(){
        $data=array(
           'judul'=> $this->input->post('judul_pengumuman'),
           'isi'=> $this->input->post('isi_pengumuman'),
           'created_at'=> date('Y-m-d'),

                    );
        $this->db->insert('pengumuman',$data);
    }
}
