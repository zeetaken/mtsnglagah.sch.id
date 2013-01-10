<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ujian extends CI_Controller
{
	
	public function Ujian()
	{
		parent::__construct();
		
	}		
	
	function pengumuman()
	{
		
		$data=array(
		'title'=>'Pengumuman Hasil ujian',
		'head'=>'Pengumuman Hasil ujian',
		'content'=>'public/ujian/pengumuman'
		);
		$this->load->view('public/template/public_template',$data);
		
	}
	function tutorial()
	{
		
		$data=array(
		'title'=>'Tutorial ujian',
		'head'=>'Tutorial ujian',
		'content'=>'public/ujian/tutorial',
		'lokasi'=>'asset/public/video/ujian/ratna.flv'
		);
		$this->load->view('public/template/public_template',$data);
	}
	function terbit_soal()	
	{
				
		$data=array(
		'title'=>'Soal ujian Masuk Siswa Baru',
		'head'=>'Ujian Masuk MTSN Glagah',
		'content'=>'public/ujian/soal_ujian'		
		);
		$this->load->view('public/template/public_template',$data);
		
	}
	
	// semua control data dimulai di sini
	
	function data_soal(){
		
		if($this->input->post('mintasoal')){
			$this->model_ujian->json_get_soal();
		}	
	}

	function data_peserta()
	{
		$a = explode('&' , $this->input->post('kirim'));
			$i = 0;
			while ($i < count($a)) {
				$b = explode('=', $a[$i]);
				$data[htmlspecialchars(urldecode($b[0]))]= htmlspecialchars(urldecode($b[1]));
				$i++;
			}
	
			
			echo json_encode($data);
	}
}
