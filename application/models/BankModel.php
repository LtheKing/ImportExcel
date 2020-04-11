<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class BankModel extends CI_Model {
	// public function view(){
	// 	return $this->db->get('siswa')->result(); // Tampilkan semua data yang ada di tabel siswa
	// }
	
	public function view(){
		$this->load->library('pagination'); // Load librari paginationnya
		
		$query = "SELECT * FROM databank "; // Query untuk menampilkan semua data siswa

		$data['bank'] = $this->db->query($query)->result();
		
		return $data;
	}


}
