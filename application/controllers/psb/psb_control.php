<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Psb_control extends CI_Controller
{
	
	function Psb_control()
	{
		parent::__construct();
		$this->load->model('psb');
	}
	
//##########################################################################################################################
//#######					FORM PENDAFTARAN MULAI
//#######		FUNGSI FORM PENDAFTARAN => MELOAD HALAMAN PENDAFTARAN (CONTROLLER USE)
//###########################################################################################################################
	function form_pendaftaran()
	{
	   $data=array(
		'title'=>'Penerimaan Siswa Baru MTSN Glagah',
		'head'=>'Form pendaftaran PSB',
		'content'=>'public/psb/form_daftar',
		'pi_juara'=>$this->psb->get_piagam_juara(),
		'pi_tipe'=>$this->psb->get_piagam_tipe(),
		'pi_tingkat'=>$this->psb->get_piagam_tingkat()
		);
		$this->load->view('public/template/public_template',$data);
	    
	}
//##########################################################################################################################
//#######					SHOW ALL SISWA
//#######		MELOAD HALAMAN PENGUMUMAN PENDAFTAR ( CALON SISWA )
//######			------- $this->db->get('tbl_siswa')==>> meload data dari 'tbl_siswa'
//###########################################################################################################################
	
	function show_all_siswa()
	{
	    
		$data=array(
		'title'=>'Penerimaan Siswa Baru MTSN Glagah',
		'head'=>'Daftar Calon Siswa',
		'content'=>'public/psb/list_siswa',
		'data'=>$this->db->get('tbl_siswa')
		);
		$this->load->view('public/template/public_template',$data);
	  		    
	}
/**
 * ###############################################################################################################################
 * 										grafik siswa meload halaman dan data pendaftar 
 * 		menhandle request dari post jqChart kemudian diteruskan ke url 'mts/display_grafik' untuk meload data view jumlah pendaftar
 * ###############################################################################################################################
 */	

	function grafik()
	{
				
		$data=array(
		'title'=>'Grafik Siswa Baru MTSN Glagah',
		'head'=>'Grafik pendaftaran PSB',
		'content'=>'public/psb/grafik'		
		);
		$this->load->view('public/template/public_template',$data);	
			    
	}
	
	
	function tutor()
	{
		$data=array(
		'title'=>'Tutorial Pendaftaran',
		'head'=>'Tutorial Pendaftaran',
		'content'=>'public/ujian/tutorial',
		'lokasi'=>'http://www.youtube.com/watch?v=eUHYZugx7aw&feature=g-all-u'
		);
		$this->load->view('public/template/public_template',$data);
	  	
	}
	
	// Action Handler Mulai di sini
	
	function form_kontrol_psb()
	{
		$this->load->library('js');
		$data=$this->input->post('daftar');
		$d=array();
		foreach ($data as $key =>$v) {
			foreach ($v as $k) {
				$d[]=$this->js->data_ajax($k);
			}			
		}
					
		echo var_dump($d);
	}
	
		function cari_siswa()
	{
		$data=$this->input->post('ajax');
		
		$hasil=$this->psb->find_sis_($data);
		echo json_encode($hasil);
	}
	
}



//###################################################################################################################################
//##########
//#########						FUNGSI-FUNGSI YANG MUNGKIN DIBUTUHKAN NANTI
//########
//###################################################################################################################################

/**	function pengumuman()
	{
		$this->psb->pengumuman_siswa();
		$data=array(
		'title'=>'Pemngumuman Penerimaan Siswa Baru MTSN Glagah',
		'head'=>'Pengumuman pendaftaran PSB',
		'content'=>'public/psb/pengumuman'
		);
		$this->load->view('public/template/public_template',$data);
	 	
	}
 	
	function cara_daftar()
		{

		$data=array(
		'title'=>'Penerimaan Siswa Baru MTSN Glagah',
		'head'=>'Form pendaftaran PSB',
		'content'=>'public/psb/cara_daftar'
		);
		$this->load->view('public/template/public_template',$data);
	    	    
	}
 * 
 * 
 *   
**/	