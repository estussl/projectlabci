<?php
class Pengumuman extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('Model_pengumuman');
        if($this->session->userdata('id_jenis_user') <> '0')
        {
   			redirect('login');
        }
    }


    function index(){
    $this->load->helper('text');
    $data['record']= $this->Model_pengumuman->tampilkanData();
    $this->template->load('templatecontentadmin','Admin/list_pengumuman_admin', $data);
    }


    function lengkap(){
    $id=$this->uri->segment(4);
    $data['record']=$this->Model_pengumuman->get_one($id);
    $this->template->load('templatecontentadmin','Admin/pengumuman_lengkap', $data);


    }

    function post(){

        if(isset($_POST['submit'])){
            $this->Model_pengumuman->post();
            redirect('Admin/Pengumuman');

        }
        else
            $this->template->load('templatecontentadmin','Admin/form_input_pengumuman');
    }



}
