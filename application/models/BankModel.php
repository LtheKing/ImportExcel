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

		public function view_cabang($id){
		$this->load->library('pagination'); // Load librari paginationnya
		$IDBank=$id;
		$query = "SELECT * FROM datacabangbank where IDBank='$id' order by ID DESC "; // Query untuk menampilkan semua data siswa
		
		$config['base_url'] = base_url('index.php/bank/lists_cabang/'.$IDBank.'');
		$config['total_rows'] = $this->db->query($query)->num_rows();
		$config['per_page'] = 10;
		$config['uri_segment'] = 4;
		$config['num_links'] = 3;
		
		// Style Pagination
		// Agar bisa mengganti stylenya sesuai class2 yg ada di bootstrap
		$config['full_tag_open']   = '<ul class="pagination pagination-sm m-t-xs m-b-xs">';
        $config['full_tag_close']  = '</ul>';
        
        $config['first_link']      = 'First'; 
        $config['first_tag_open']  = '<li>';
        $config['first_tag_close'] = '</li>';
        
        $config['last_link']       = 'Last'; 
        $config['last_tag_open']   = '<li>';
        $config['last_tag_close']  = '</li>';
        
        $config['next_link']       = '&nbsp;<i class="glyphicon glyphicon-menu-right"></i>&nbsp;'; 
        $config['next_tag_open']   = '<li>';
        $config['next_tag_close']  = '</li>';
        
        $config['prev_link']       = '&nbsp;<i class="glyphicon glyphicon-menu-left"></i>&nbsp;'; 
        $config['prev_tag_open']   = '<li>';
        $config['prev_tag_close']  = '</li>';
        
        $config['cur_tag_open']    = '<li class="active"><a href="#">';
        $config['cur_tag_close']   = '</a></li>';
         
        $config['num_tag_open']    = '<li>';
        $config['num_tag_close']   = '</li>';
        // End style pagination
		
		$this->pagination->initialize($config); // Set konfigurasi paginationnya
		
		$page = ($this->uri->segment($config['uri_segment'])) ? $this->uri->segment($config['uri_segment']) : 0;
		$query .= " LIMIT ".$page.", ".$config['per_page'];
		
		$data['limit'] = $config['per_page'];
		$data['total_rows'] = $config['total_rows'];
		$data['pagination'] = $this->pagination->create_links(); // Generate link pagination nya sesuai config diatas
		$data['nasabah'] = $this->db->query($query)->result();
		
		$query2 = "SELECT * FROM databank where IDBank='$id'"; 
		$data['bank'] = $this->db->query($query2)->result();		
		$query3 = "SELECT * FROM dataprovinsi where ID='0'"; 
		$data['cabangbank'] = $this->db->query($query3)->result();		
		return $data;
	}

		public function view_search_provinsi($IDBank,$search_provinsi){
		$this->load->library('pagination'); // Load librari paginationnya
		$query = "SELECT * FROM datacabangbank where IDBank='$IDBank' 
		and IDProvinsi='$search_provinsi'
		order by ID DESC "; // Query untuk menampilkan semua data siswa
		
		$config['base_url'] = base_url('index.php/bank/search_provinsi/'.$IDBank.'');
		$config['total_rows'] = $this->db->query($query)->num_rows();
		$config['per_page'] = 25;
		$config['uri_segment'] = 4;
		$config['num_links'] = 3;
		
		// Style Pagination
		// Agar bisa mengganti stylenya sesuai class2 yg ada di bootstrap
		$config['full_tag_open']   = '<ul class="pagination pagination-sm m-t-xs m-b-xs">';
        $config['full_tag_close']  = '</ul>';
        
        $config['first_link']      = 'First'; 
        $config['first_tag_open']  = '<li>';
        $config['first_tag_close'] = '</li>';
        
        $config['last_link']       = 'Last'; 
        $config['last_tag_open']   = '<li>';
        $config['last_tag_close']  = '</li>';
        
        $config['next_link']       = '&nbsp;<i class="glyphicon glyphicon-menu-right"></i>&nbsp;'; 
        $config['next_tag_open']   = '<li>';
        $config['next_tag_close']  = '</li>';
        
        $config['prev_link']       = '&nbsp;<i class="glyphicon glyphicon-menu-left"></i>&nbsp;'; 
        $config['prev_tag_open']   = '<li>';
        $config['prev_tag_close']  = '</li>';
        
        $config['cur_tag_open']    = '<li class="active"><a href="#">';
        $config['cur_tag_close']   = '</a></li>';
         
        $config['num_tag_open']    = '<li>';
        $config['num_tag_close']   = '</li>';
        // End style pagination
		
		$this->pagination->initialize($config); // Set konfigurasi paginationnya
		
		$page = ($this->uri->segment($config['uri_segment'])) ? $this->uri->segment($config['uri_segment']) : 0;
		$query .= " LIMIT ".$page.", ".$config['per_page'];
		
		$data['limit'] = $config['per_page'];
		$data['total_rows'] = $config['total_rows'];
		$data['pagination'] = $this->pagination->create_links(); // Generate link pagination nya sesuai config diatas
		$data['nasabah'] = $this->db->query($query)->result();
		
		$query2 = "SELECT * FROM databank where IDBank='$IDBank'"; 
		$data['bank'] = $this->db->query($query2)->result();		
		$query3 = "SELECT * FROM dataprovinsi where ID='$search_provinsi'"; 
		$data['cabangbank'] = $this->db->query($query3)->result();		

		return $data;
	}

	public function data_provinsi(){
	  $query = $this->db->query("SELECT * FROM dataprovinsi where ID !='0' ");
  		//return $this->db->get_where($table,$where);
		return $query->result_array();
    }


}
