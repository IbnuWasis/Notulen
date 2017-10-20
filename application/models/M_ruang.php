<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_ruang extends CI_Model{
         public function select_all(){
        $this->db->select('*');
        $this->db->from('ruang');
        $data = $this->db->get();
        return $data->result();
        }
        public function tambah($data){
            $this->db->insert('ruang',$data);
            return $this->db->affected_rows();
        }
        public function delete($id){
                $this->db->where('id_ruang',$id);
                $this->db->delete('ruang');

		return $this->db->affected_rows();
        }
        public function select_by_id($id){
            $this->db->select('*');
            $this->db->from('ruang');
            $this->db->where('id_ruang',$id);
            $data=$this->db->get();
            return $data->row();
        }
        public function update($data){
            $condition="id_ruang=".$data['id_ruang'];
            $this->db->where($condition);
            $this->db->update('ruang',$data);
            return $this->db->affected_rows();
        }
        public function total_rows() {
            $data = $this->db->get('ruang');
    
            return $data->num_rows();
        }
}

