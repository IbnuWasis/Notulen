<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
class User extends AUTH_Controller{
        public function __construct() {
		parent::__construct();
		$this->load->model('M_posisi');
                $this->load->model('M_admin');
	}
        public function index(){
                $data['userdata'] = $this->userdata;
		$data['dataPosisi'] = $this->M_posisi->select_all();
		$data['dataAdmin'] = $this->M_admin->select_all();
                $data['dataAkses'] = $this->M_admin->select_akses();

		$data['page'] = "user";
		$data['judul'] = "Data User";
		$data['deskripsi'] = "Manage Data User";

		$data['modal_tambah_user'] = show_my_modal('modal_apps/modal_tambah_user', 'tambah-user', $data);

		$this->template->views('user/home', $data);
        }
        public function tampil(){
            $data['dataAdmin'] = $this->M_admin->select_all();
            $this->load->view('user/list_data',$data);
        }
        public function prosesTambah(){
            $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
            $this->form_validation->set_rules('username', 'Username', 'trim|required');
            $this->form_validation->set_rules('jabatan', 'Jabatan', 'trim|required');
            $this->form_validation->set_rules('akses', 'Akses', 'trim|required');
            $this->form_validation->set_rules('password', 'Password', 'trim|required');
            //$data = $this->input->post();
            $data =array(
                            'username' =>$this->input->post('username') , 
                            'password'=> $this->input->post('password'),
                            'nama'=> $this->input->post('nama'),//ghayuh
                            'id_jabatan'=> $this->input->post('jabatan'),
                            'akses'=> $this->input->post('akses'),//ghy -> add new spec 12/7/2016
				);
		if ($this->form_validation->run() == TRUE) {
			$result = $this->M_admin->tambah($data);
                        //$result=1;
			if ($result > 0) {
				$out['status'] = '';
				$out['msg'] = show_succ_msg('Data User Berhasil ditambahkan', '20px');
			} else {
				$out['status'] = '';
				$out['msg'] = show_err_msg('Data User Gagal ditambahkan', '20px');
			}
		} else {
			$out['status'] = 'form';
			$out['msg'] = show_err_msg(validation_errors());
		}

		echo json_encode($out);
        }

        public function delete(){
            $id = $_POST['id'];
            $result = $this->M_admin->delete($id);
          
            if ($result > 0){
                echo show_succ_msg('Data User Berhasil dihapus','20px');
            } else {
                echo show_err_msg('Data User Gagal Dihapus','20px');
            }
        }
        public function update(){
            $id=trim($_POST['id']);
            $data['dataUser'] = $this->M_admin->select_by_id($id);
            $data['dataPosisi'] = $this->M_posisi->select_all();
            $data['dataAkses'] = $this->M_admin->select_akses();
            $data['userdata'] = $this->userdata;
            echo show_my_modal('modal_apps/modal_update_user', 'update-user', $data);
        }
        public function prosesUpdate(){
            $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
            $this->form_validation->set_rules('username', 'Username', 'trim|required');
            $this->form_validation->set_rules('jabatan', 'Jabatan', 'trim|required');
            $this->form_validation->set_rules('akses', 'Akses', 'trim|required');
            $this->form_validation->set_rules('password', 'Password', 'trim|required');
            
            $data =array(
                            'id' =>$this->input->post('id') , 
                            'username' =>$this->input->post('username') , 
                            'password'=> $this->input->post('password'),
                            'nama'=> $this->input->post('nama'),//ghayuh
                            'id_jabatan'=> $this->input->post('jabatan'),
                            'akses'=> $this->input->post('akses'),//ghy -> add new spec 12/7/2016
				);
		if ($this->form_validation->run() == TRUE) {
			$result = $this->M_admin->update($data);
                        //$result=1;
			if ($result > 0) {
				$out['status'] = '';
				$out['msg'] = show_succ_msg('Update Data User Berhasil', '20px');
			} else {
				$out['status'] = '';
				$out['msg'] = show_err_msg('Update Data User Gagal', '20px');
			}
		} else {
			$out['status'] = 'form';
			$out['msg'] = show_err_msg(validation_errors());
		}

		echo json_encode($out);
        }
}

