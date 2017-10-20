<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Ruang extends AUTH_Controller{
        public function __construct() {
		parent::__construct();
		$this->load->model('M_ruang');
	}
        public function index(){
            $data['userdata'] 	= $this->userdata;
            $data['dataRuang'] 	= $this->M_ruang->select_all();

            $data['page'] 		= "ruang";
            $data['judul'] 		= "Data Ruang";
            $data['deskripsi']          = "Manage Data Kota";

            $data['modal_tambah_ruang'] = show_my_modal('modal_apps/modal_tambah_ruang', 'tambah-ruang', $data);

            $this->template->views('ruang/home', $data);
        }
        public function tampil(){
            $data['dataRuang'] = $this->M_ruang->select_all();
            $this->load->view('ruang/list_data',$data);
        }
        public function prosesTambah(){
            $this->form_validation->set_rules('id_ruangan', 'Id Ruang', 'trim|required');
            $this->form_validation->set_rules('nama_ruangan', 'Nama', 'trim|required');
            $this->form_validation->set_rules('kapasitas', 'Kapasitas', 'trim|required');
            $this->form_validation->set_rules('status', 'Status', 'trim|required');
            
            $data =array(
                            'id_ruang' =>$this->input->post('id_ruangan') , 
                            'nama_ruang'=> $this->input->post('nama_ruangan'),
                            'kapasitas'=> $this->input->post('kapasitas'),//ghayuh
                            'status'=> $this->input->post('status'),
				);
		if ($this->form_validation->run() == TRUE) {
			$result = $this->M_ruang->tambah($data);
			if ($result > 0) {
				$out['status'] = '';
				$out['msg'] = show_succ_msg('Data Ruang Berhasil ditambahkan', '20px');
			} else {
				$out['status'] = '';
				$out['msg'] = show_err_msg('Data Ruang Gagal ditambahkan', '20px');
			}
		} else {
			$out['status'] = 'form';
			$out['msg'] = show_err_msg(validation_errors());
		}

		echo json_encode($out);
        }
        public function delete(){
            $id = trim($_POST['id']);
            $result = $this->M_ruang->delete($id);
          //$result=1;
            if ($result > 0){
                echo show_succ_msg('Data Ruang Berhasil Dihapus','20px');
            } else {
                echo show_err_msg('Data Ruang Gagal Dihapus','20px');
            }
        
        }
        public function update(){
            $id = trim($_POST['id']);
            $data['dataRuang'] = $this->M_ruang->select_by_id($id);
            $data['userdata'] 	= $this->userdata;
            echo show_my_modal('modal_apps/modal_update_ruang', 'update-ruang', $data);
        }
        public function prosesUpdate(){
            $this->form_validation->set_rules('nama_ruangan', 'Nama', 'trim|required');
            $this->form_validation->set_rules('kapasitas', 'Kapasitas', 'trim|required');
            $this->form_validation->set_rules('status', 'Status', 'trim|required');
            
            $data =array(
                            'id_ruang' =>$this->input->post('id_ruang') , 
                            'nama_ruang'=> $this->input->post('nama_ruangan'),
                            'kapasitas'=> $this->input->post('kapasitas'),//ghayuh
                            'status'=> $this->input->post('status'),
				);
		if ($this->form_validation->run() == TRUE) {
			$result = $this->M_ruang->update($data);
			if ($result > 0) {
				$out['status'] = '';
				$out['msg'] = show_succ_msg('Update Data Ruang Berhasil', '20px');
			} else {
				$out['status'] = '';
				$out['msg'] = show_err_msg('Update Data Ruang Gagal', '20px');
			}
		} else {
			$out['status'] = 'form';
			$out['msg'] = show_err_msg(validation_errors());
		}

		echo json_encode($out);
        }
}

