<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Nasabah extends CI_Controller {
	private $filename = "import_data"; // Kita tentukan nama filenya
	
	public function __construct(){
		parent::__construct();
		
		$this->load->model('NasabahModel');
	}
	
	// public function index(){
	// 	$data['siswa'] = $this->NasabahModel->view();
	// 	$this->load->view('view', $data);
	// }
	
	public function index(){
		redirect("nasabah/lists"); // Untuk redirect ke function lists
	}

	public function lists($id){
		$data['model'] = $this->NasabahModel->view($id); // Panggil fungsi view() yang ada di model siswa
		
		$this->load->view('view', $data);
	}

	public function search_nomor($IDBank){
		if($this->input->post('submit')){ 
		$search_nomor=$this->input->post('search_nomor');
		$IDBank=$this->input->post('IDBank');
		$data['cari'] = $this->input->post('search_nomor');
		$data['model'] = $this->NasabahModel->view_search_nomor($IDBank,$search_nomor); // Panggil fungsi view() yang ada di model siswa
		$data['keyword'] = $search_nomor;
		$this->session->set_userdata('sess_cari', $data['cari']);
		$this->load->view('view_search', $data);
		}
		else {
		$search_nomor = $this->session->userdata('sess_cari');
		$data['model'] = $this->NasabahModel->view_search_nomor($IDBank,$search_nomor); // Panggil fungsi view() yang ada di model siswa
		$data['keyword'] = $search_nomor;
		$this->load->view('view_search', $data);
		}
	}

	public function search_kategori($IDBank){
		if($this->input->post('submit')){ 
		$search_kategori=$this->input->post('search_kategori');
		$search_tipe=$this->input->post('search_tipe');
		$IDBank=$this->input->post('IDBank');
		$data['cari'] = $this->input->post('search_kategori');
		$data['cari_tipe'] = $this->input->post('search_tipe');
		$data['model'] = $this->NasabahModel->view_search_kategori($IDBank,$search_kategori,$search_tipe); // Panggil fungsi view() yang ada di model siswa
		$this->session->set_userdata('sess_cari', $data['cari']);
		$this->session->set_userdata('sess_cari_tipe', $data['cari_tipe']);
		$this->load->view('view_search_kategori', $data);
		}
		else {
		$search_kategori = $this->session->userdata('sess_cari');
		$search_tipe = $this->session->userdata('sess_cari_tipe');
		$data['model'] = $this->NasabahModel->view_search_kategori($IDBank,$search_kategori,$search_tipe); // Panggil fungsi view() yang ada di model siswa
		$data['cari'] = $search_kategori;
		$data['cari_tipe'] = $search_tipe;
		$this->load->view('view_search_kategori', $data);
		}
	}


	
	public function import($IDBank){
		// Load plugin PHPExcel nya
		$upload = $this->NasabahModel->upload_file($this->filename);
		include APPPATH.'third_party/PHPExcel/PHPExcel.php';
		
		$excelreader = new PHPExcel_Reader_Excel2007();
		$loadexcel = $excelreader->load('excel/'.$this->filename.'.xlsx'); // Load file yang telah diupload ke folder excel
		$sheet = $loadexcel->getActiveSheet()->toArray(null, true, true ,true);
		
		// Buat sebuah variabel array untuk menampung array data yg akan kita insert ke database
		$data = array();
		
		$numrow = 1;
		foreach($sheet as $row){
			// Cek $numrow apakah lebih dari 1
			// Artinya karena baris pertama adalah nama-nama kolom
			// Jadi dilewat saja, tidak usah diimport
			if($numrow > 1){
				// Kita push (add) array data ke variabel data
				array_push($data, array(
					// 'nis'=>$row['A'], // Insert data nis dari kolom A di excel
					// 'nama'=>$row['B'], // Insert data nama dari kolom B di excel
					// 'jenis_kelamin'=>$row['C'], // Insert data jenis kelamin dari kolom C di excel
					// 'alamat'=>$row['D'], // Insert data alamat dari kolom D di excel

					 
					'IDBank'=>$IDBank, 
					'TanggalImport'=>date('Y-m-d H:i:s'), 
					'NomorKartu'=>$row['A'], 
					'NamaNasabah'=>$row['B'], 
					'DateOfBirth'=>$row['H'], 
					'NomorHP'=>$row['N'], 
					'NomorTeleponRumah'=>$row['O'], 
					'NomorTeleponKantor'=>$row['P'], 
					'NomorEC'=>$row['Q'], 
					'Email'=>$row['R'], 
					'IbuKandung'=>$row['S'], 
					'JenisKelamin'=>$row['T'], 
					'AlamatRumah1'=>$row['U'], 
					'AlamatRumah2'=>$row['V'], 
					'AlamatRumah3'=>$row['W'], 
					'AlamatRumah4'=>$row['X'], 
					'NamaKantor'=>$row['Y'], 
					'AlamatKantor1'=>$row['Z'], 
					'AlamatKantor2'=>$row['AA'], 
					'AlamatKantor3'=>$row['AB'], 
					'AlamatKantor4'=>$row['AC'], 
					'NamaEC'=>$row['AD'], 
					'AlamatEC'=>$row['AE'], 
					'Regional'=>$row['AF'], 
					'TglTurunAccount'=>$row['E'], 
					'Status'=>$row['C'], 
					'Action'=>$row['D'], 
					'OpenDate'=>$row['F'], 
					'WODate'=>$row['G'], 
					'LastPaymentDate'=>$row['I'], 
					'LastPaymentNominal'=>$row['J'], 
					'Limitasi'=>$row['K'], 
					'OSBall'=>$row['L'], 
					'Principall'=>$row['M'], 
					'PermanentMessage'=>$row['AG'], 
					'LastReport'=>$row['AH']

				));
			}
			
			$numrow++; // Tambah 1 setiap kali looping
		}

		// Panggil fungsi insert_multiple yg telah kita buat sebelumnya di model
		$this->NasabahModel->insert_multiple($data);
		redirect("nasabah/lists/$IDBank"); // Redirect ke halaman awal (ke controller siswa fungsi index)
	}
}
