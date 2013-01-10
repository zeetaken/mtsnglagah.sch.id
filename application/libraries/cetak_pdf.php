<?
require_once APPPATH."/third_party/fpdf.php";
class Cetak_pdf extends FPDF
{
	public function __construct() { 
        parent::__construct(); 
    }
		
	//untuk pengaturan header halaman
	function Header()
	{
		//Pengaturan Font Header
		$this->SetFont('Arial','B',14); 
		//jenis font : Times New Romans, Bold, ukuran 14
		
		//untuk warna background Header
		$this->SetFillColor(255,255,255);
		
		//untuk warna text
		$this->SetTextColor(0,0,0);
		
		//Menampilkan tulisan di halaman
		$this->Cell(24,1,'PENGUMUMAN HASIL SELEKSI SISWA BARU MTSN GLAGAH','TBLR',0,'C',1); //TBLR (untuk garis)=> B = Bottom,
		// L = Left, R = Right
		//untuk garis, C = center
	}
	
	function set_kertas()
	{
		//pengaturan ukuran kertas P = Portrait
		$pdf = new PDF('L','cm','A4');
		$pdf->Open();
		$pdf->AddPage();
	}

	function cetak_psb()
	{
		$this->set_kertas();
		//Ln() = untuk pindah baris
		$pdf->Ln();
		$pdf->SetFont('Arial','B',12);
		
		$pdf->Cell(1,1,'No','LRTB',0,'C');
		$pdf->Cell(5,1,'Nama','LRTB',0,'C');
		$pdf->Cell(5,1,'Asal Sekolah','LRTB',0,'C');
		$pdf->Cell(4,1,'Jenis Kelamin','LRTB',0,'C');
		$pdf->Cell(4,1,'Jurusan','LRTB',0,'C');
		$pdf->Cell(2,1,'NUN','LRTB',0,'C');
		$pdf->Cell(3,1,'Jml Nilai','LRTB',0,'C');
		
		$pdf->Ln();
		
		$pdf->SetFont('Times','',10);
		
		//menampilkan data dari hasil query database
		$pdf->Cell(1,1,1,'LBTR',0,'C');
		$pdf->Cell(5,1,$_POST['nama'],'LBTR',0,'C');
		$pdf->Cell(5,1,$_POST['asal'],'LBTR',0,'C');
		$pdf->Cell(4,1,$_POST['jk'],'LBTR',0,'C');
		$pdf->Cell(4,1,$_POST['jrs'],'LBTR',0,'C');
		$pdf->Cell(2,1,$_POST['nun'],'LBTR',0,'C');
		$pdf->Cell(3,1,$_POST['jml'],'LBTR',0,'C');
		
		$pdf->Ln();
		
		
		//menampilkan output berupa halaman PDF
		
		$pdf->Output();
	}
	
}	