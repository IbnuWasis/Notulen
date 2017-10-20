<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_notulen extends CI_Model{
    public function select_all(){
        $this->db->select('notulen.id_notulen AS id,notulen.nomor_rapat AS nomor,notulen.tanggal AS tanggal,notulen.judul_rapat AS judul'
                . ',admin.nama AS nama,ruang.nama_ruang AS ruang,notulen.hasil_record AS record,'
                . 'notulen.hasil_pdf AS pdf');
        $this->db->from('notulen');
        $this->db->join('admin','notulen.id_user=admin.id');
        $this->db->join('ruang','notulen.id_ruang=ruang.id_ruang');
        $data=$this->db->get();
        return $data->result();
    }
    public function total_rows() {
		$data = $this->db->get('notulen');

		return $data->num_rows();
	}
}