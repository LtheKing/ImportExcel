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


}
