<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_psb extends CI_Controller
{
	
	function Admin_psb()
	{
		parent::__construct();
		$this->auth->cek_auth();
	}
	//psb
	
	function menu_show_siswa(){
		$this->auth->cek_auth();	
		$data=array(
		'title'=>'Admin MTSN Glagah',
		'head'=>'List Calon Siswa Baru',
		'content'=>'admin/util/psb/list_siswa',
		'menu_active'=>'menu_psb',
		'submenu_active'=>'psb-list',
		'menu'=>$this->auth->filter_menu(),
		'data'=>$this->db->get('tbl_siswa')
		);
		$this->load->view('admin/template/template',$data);
	}
	function grafik_psb_admin()
	{
				
		$data=array(
		'title'=>'Grafik Siswa Baru MTSN Glagah',
		'head'=>'Grafik pendaftaran PSB',
		'content'=>'admin/util/psb/grafik',
		'menu_active'=>'menu_psb',
		'submenu_active'=>'psb-list',
		'menu'=>$this->auth->filter_menu()
		);
		$this->load->view('admin/template/template',$data);	
			    
	}
	
	
	function konfigurasi_psb()
	{
		$data=array(
		'title'=>'Konfigurasi PSB',
		'head'=>'Konfigurasi PSB',
		'content'=>'admin/util/psb/config_psb',
		
		'menu_active'=>'menu_psb',
		'submenu_active'=>'psb-list',
		'menu'=>$this->auth->filter_menu()
		);
		$this->load->view('admin/template/template',$data);	
		
	}

}
