<?php
class Halaman_Utama extends CI_Controller
{
   public function index()
   {
      // $this->load->view('halaman_utama');
      $data['contents'] = $this->load->view('content/halaman_utama', '', TRUE);
      $this->load->view('template/template_publik', $data);
   }


}
