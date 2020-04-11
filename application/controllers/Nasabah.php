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
