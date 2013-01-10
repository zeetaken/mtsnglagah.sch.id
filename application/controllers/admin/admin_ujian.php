<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_ujian extends CI_Controller
{
	function Admin_ujian()
	{
		parent::__construct();
		$this->auth->cek_auth();
	}
	//soal
	function index() 
	{
		$data=array(
		'title'=>'Admin MTSN Glagah',
		'head'=>'Buat soal ujian',
		'content'=>'admin/util/ujian/form_ujian',
		'menu'=>$this->auth->filter_menu(),
		'menu_active'=>'menu_ujian',
		'submenu_active'=>'ujian-list',		
		'mapel'=>$this->db->get('tbl_mapel')
		);
		
		$this->load->view('admin/template/template',$data);
		
	}
	/**
	 * menghadle
	 */
	function menu_config()
	{
		if ($this->input->post('video')) {
			$this->upload_vid();
		}	
		else {
			$data=array(
			'title'=>'Admin MTSN Glagah',
			'head'=>'Konfigurasi ujian',
			'content'=>'admin/util/ujian/konfigurasi',
			'menu'=>$this->auth->filter_menu(),		
			'menu_active'=>'menu_ujian',
			'submenu_active'=>'ujian-list',
			'mapel'=>$this->model_ujian->get_mapel()
			);
			
			$this->load->view('admin/template/template',$data);				
		}			
	}
	
	
	function add_soal()
	{
		$this->form_validation->set_rules('mapel','Pilihan Mata Pelajaran','trim|required');
		$this->form_validation->set_rules('soal','Soal','trim|required');
		$this->form_validation->set_rules('jwba','Jawaban A','trim|required');
		$this->form_validation->set_rules('jwbb','Jawaban B','trim|required');
		$this->form_validation->set_rules('jwbc','Jawaban C','trim|required');
		$this->form_validation->set_rules('jwbd','Jawaban D','trim|required');
		$this->form_validation->set_rules('jwbbnr','Pilihan Jawaban','trim|required');
		if($this->form_validation->run()==FALSE)
		{
			$this->add_soal();
			echo "<script>alert('data tidak lengkap!!');</script>";
		}
		else {
			
			$data=array(
			'soal'=>$this->input->post('soal'),
			'pil_a'=>$this->input->post('jwba'),
			'pil_b'=>$this->input->post('jwbb'),
			'pil_c'=>$this->input->post('jwbc'),
			'pil_d'=>$this->input->post('jwbd'),
			'jwb'=>$this->input->post('jwbbnr'),
			'kd_mapel'=>$this->input->post('mapel')
			);
			
			$this->model_ujian->set_soal($data);	
						
		}

	}

	function baca_excel()
	{
		
		$post_excel=$this->input->post('excelRead');		
		if($post_excel)
		{
			
			$excel=$this->spreadsheet_excel_reader($post_excel);			
			$jmlData=$excel->rowcount(0);
			
			for ($i=5; $i < $jmlData; $i++) { 
				$list=array(					
					'soal'=>$excel->val($i,1,0),					
					'pil_a'=>$excel->val($i,2,0),
					'pil_b'=>$excel->val($i,3,0),
					'pil_c'=>$excel->val($i,4,0),
					'pil_d'=>$excel->val($i,5,0),
					'jwb'=>$excel->val($i,1,0),
					'kd_mapel'=>''
				);
								
				$this->model_ujian->set_soal($list);
			}
			echo "berhasil";
		}
	}
	
	function siswa_lolos()
	{
		$data=array(
			'title'=>'Admin MTSN Glagah',
			'head'=>'Daftar Siswa Lolos Seleksi',
			'content'=>'admin/util/ujian/list_lolos',
			'menu'=>$this->auth->filter_menu(),		
			'menu_active'=>'menu_ujian',
			'submenu_active'=>'ujian-list',
			'data'=>$this->model_ujian->get_soal()
			);
			
			$this->load->view('admin/template/template',$data);
		
	}
	function pembagian_kelas()
	{
		$data=array(
			'title'=>'Admin MTSN Glagah',
			'head'=>'Daftar Pembagian Kelas',
			'content'=>'admin/util/ujian/bagi_kelas',
			'menu'=>$this->auth->filter_menu(),		
			'menu_active'=>'menu_ujian',
			'submenu_active'=>'ujian-list',
			'data'=>$this->model_ujian->get_soal()
			);
			
			$this->load->view('admin/template/template',$data);
	}
	
	function edit_soal(){
		$data=array(
			'title'=>'Admin MTSN Glagah',
			'head'=>'Konfigurasi ujian',
			'content'=>'admin/util/ujian/soal_edit',
			'menu'=>$this->auth->filter_menu(),		
			'menu_active'=>'menu_ujian',
			'submenu_active'=>'ujian-list',
			'data'=>$this->model_ujian->get_soal()
			);
			
			$this->load->view('admin/template/template',$data);
	}
		
	function upload_vid(){
		$config=array(
			'upload_path'=>realpath(APPPATH .'../asset/public/video/ujian/'),
			'allowed_types'=>'png|jpg',
			'max_size'=>'204800',
			'remove_spaces'=>TRUE
		);
		$this->load->library('upload',$config);
	
		if(!$this->upload->do_upload('video')){
			echo "upload gagal".$this->upload->display_errors();
		}
		else{
			echo "proses upload berhasil";
			}	
	}
	
	function show_all_table_soal()
	{
		$this->model_ujian->json_get_soal();
	}
/**	
	function list_mapel()
	{
		if ($this->input->post('master')) {
			$data=$this->db->get('tbl_mapel_master');
		
			$json='{"master":[';
				foreach ($data->result() as $master) {
					$json.='"'.$master->nm_master_mapel . '",';
				}
			$json=substr($json, 0,strlen($json)-1);	
			$json.=']';
			$json.='}';
			
			echo $json;
			
		}elseif($this->input->post('aktif')){
			
			$data=$this->db->get('tbl_mapel');		
			$json='{"aktif":[';
				foreach ($data->result() as $master) {
					$json.='"'.$master->nm_mapel . '",';
				}
			$json=substr($json, 0,strlen($json)-1);	
			$json.=']';
			$json.='}';
			
			echo $json;	
				
			}
			
	}
	
	function add_mapel(){
		$single=$this->input->post('single');
		$del=$this->input->post('del');
		$single_master=$this->input->post('singlemaster');
		
		if($single)
		{									
			$this->model_ujian->add_single_mapel($single);
			$this->model_ujian->del_single_master_mapel($single);
		}
		elseif($del)
		{
			$this->model_ujian->del_single_mapel($del);
		}
		elseif ($single_master) {
			$this->model_ujian->add_single_master_mapel($single_master);
		}
	}	
* 
 */
 
 	
}
 