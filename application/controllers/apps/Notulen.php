<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notulen extends AUTH_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('M_notulen');
        $this->load->model('M_admin');
        $this->load->model('M_ruang');
    }
    public function index(){
        $data['userdata'] = $this->userdata;
        $data['dataRuang'] = $this->M_ruang->select_all();
        $data['dataNotulen']= $this->M_notulen->select_all();
         $data['dataUser']= $this->M_admin->select_all();

        $data['page'] = "notulen";
        $data['judul'] = "Notulensi";
        $data['deskripsi'] = "Manage Notulensi";

        //$data['modal_tambah_pegawai'] = show_my_modal('modals/modal_tambah_pegawai', 'tambah-pegawai', $data);

        $this->template->views('notulen/home', $data);
    }
    public function tampil(){
        $data['dataNotulen']= $this->M_notulen->select_all();
        $this->load->view('notulen/list_data',$data);
    }
    
}

