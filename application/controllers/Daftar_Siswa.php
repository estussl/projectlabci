<?php

class Daftar_Siswa extends CI_Controller
{

   public function index()
   {
      $this->load->view('daftar_siswa');
   }

   function proses_pendaftaran()
   {
      $daftar = $this->input->post('daftar');

      if(isset($daftar))
      {
         $this->load->model('Model_siswa');
         $cek = $this->Model_siswa->post();

         if($cek)
         {
            $data['contents'] = $this->load->view('content/pemberitahuan_pendaftaran', '', TRUE);
            $this->load->view('template/template_publik', $data);
         }
      }
      else
      {
         redirect(index.html);
      }
   }


}

 ?>
