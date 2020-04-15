<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Bank extends CI_Controller {
	
	
	public function __construct(){
		parent::__construct();
		
		$this->load->model('BankModel');
	}
	
	// public function index(){
	// 	$data['siswa'] = $this->SiswaModel->view();
	// 	$this->load->view('view', $data);
	// }
	
	public function index(){
		redirect("bank/lists"); // Untuk redirect ke function lists
	}

	public function lists(){
		$data['model'] = $this->BankModel->view(); // Panggil fungsi view() yang ada di model siswa
		
		$this->load->view('view_list_bank', $data);
	}

	public function lists_cabang($id){
		$data['NamaProvinsi'] = "INDONESIA";
		$data['data_provinsi'] = $this->BankModel->data_provinsi();
		$data['model'] = $this->BankModel->view_cabang($id); // Panggil fungsi view() yang ada di model siswa
		
		$this->load->view('view_cabang_bank', $data);
	}

	public function search_provinsi($IDBank){
		if($this->input->post('submit')){ 
		$search_provinsi=$this->input->post('search_provinsi');
		$IDBank=$this->input->post('IDBank');
		$data['cari'] = $this->input->post('search_provinsi');
		$data['model'] = $this->BankModel->view_search_provinsi($IDBank,$search_provinsi); // Panggil fungsi view() yang ada di model siswa
		$data['data_provinsi'] = $this->BankModel->data_provinsi();
		$this->session->set_userdata('sess_cari', $data['cari']);
		$this->load->view('view_cabang_bank', $data);
		}
		else {
		$search_provinsi = $this->session->userdata('sess_cari');
		$data['model'] = $this->BankModel->view_search_provinsi($IDBank,$search_provinsi); // Panggil fungsi view() yang ada di model siswa
		$data['data_provinsi'] = $this->BankModel->data_provinsi();
		$data['cari'] = $search_provinsi;
		$this->load->view('view_cabang_bank', $data);
		}
	}

}
