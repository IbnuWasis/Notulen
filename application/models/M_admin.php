<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model {
    public function select_all(){
        $this->db->select('admin.id AS id_user, admin.nama AS nama,posisi.nama AS jabatan,admin.username AS username,user_akses.deskripsi AS akses');
        $this->db->from('admin');
        $this->db->join('user_akses','admin.akses=user_akses.id');
        $this->db->join('posisi','admin.id_jabatan=posisi.id');
        $data=$this->db->get();
        return $data->result();
    }

    public function update($data) {
        $condition="id=".$data['id'];
		$this->db->where($condition);
		$this->db->update("admin", $data);

		return $this->db->affected_rows();
	}

	public function select($id = '') {
		if ($id != '') {
			$this->db->where('id', $id);
		}

		$data = $this->db->get('admin');

		return $data->row();
	}
        public function delete($id){
                $this->db->where('id',$id);
                $this->db->delete('admin');

		return $this->db->affected_rows();
        }
        public function select_akses(){
            $data= $this->db->get('user_akses');
            return $data->result();
        }
        public function tambah($data){
            $this->db->insert('admin',$data);
            return $this->db->affected_rows();
        }
        public function select_by_id($id){
            $this->db->select('*');
            $this->db->from('admin');
            $this->db->where('id',$id);
            $data=$this->db->get();
            return $data->row();
        }
        public function total_rows() {
            $data = $this->db->get('admin');
    
            return $data->num_rows();
        }
}

/* End of file M_admin.php */
/* Location: ./application/models/M_admin.php */