<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_control extends CI_Controller
{
	
	function Admin_control()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->auth->cek_auth();
	}
	
	function index()
	{			
		if($this->auth->cek_auth()==true){	
		$data=array(
		'title'=>'Admin MTSN Glagah',
		'head'=>'Post Berita Baru',
		'content'=>'admin/util/news/form_news',
		'menu'=>$this->auth->filter_menu(),
		'menu_active'=>'menu_dashboard',
		'submenu_active'=>'dashboard-list'
		);
		$this->load->view('admin/template/template',$data);
		}
	}
	function menu_post(){
		$this->auth->cek_auth();	
		$data=array(
		'title'=>'Admin MTSN Glagah',
		'head'=>'Post Berita Baru',
		'content'=>'admin/util/news/form_news',
		'menu_active'=>'menu_dashboard',
		'submenu_active'=>'dashboard-list',
		'menu'=>$this->auth->filter_menu()
		);
		$this->load->view('admin/template/template',$data);
	}
	function edit_news(){
		
		$this->auth->cek_auth();	
		$data=array(
		'title'=>'Admin MTSN Glagah',
		'head'=>'Edit Berita',
		'content'=>'admin/util/news/news_edit',
		'menu'=>$this->auth->filter_menu(),
		'menu_active'=>'menu_dashboard',
		'submenu_active'=>'dashboard-list',
		'data'=>$this->db->get('tbl_sys_berita')
		);
		$this->load->view('admin/template/template',$data);
		
	}
		
	// news
	function tmb_brita()
	{
		$this->load->model('news');
				
		if ($this->input->post('terbit')) {
			$this->load->library('form_validation');
			
			$this->form_validation->set_rules('jud', 'Judul', 'required');
			$this->form_validation->set_rules('isi', 'Konten Berita', 'required');
			$this->form_validation->set_rules('kat', 'Kategori', 'required');
			
			if ($this->form_validation->run() == FALSE) {
				$this->menu_post();
			} else {
				$jud=$this->input->post('jud');
				$isi=$this->input->post('isi');
				$kat=$this->input->post('kat');
				
				$this->news->buat_berita($jud,$isi,$kat);
			}			
		}
	}
		
	function logging_out()
	{
		$this->auth->logout();
		redirect(base_url());
	}
	
} 