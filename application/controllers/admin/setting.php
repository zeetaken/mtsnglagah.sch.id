<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * class akun admin digunakan untuk / sbg Controller event tambah dan edit
 *  akun Sistem informasi ini
 */
class Setting extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		$this->auth->cek_auth();
	}
	
	function form_add()
	{
		$this->auth->cek_auth();
		$data=array(
		'title'=>'Tambah Akun',
		'head'=>'Tambah Admin Baru',
		'content'=>'admin/util/system_setting/add_akun',
		'menu'=>$this->auth->filter_menu(),
		'menu_active'=>'menu_akun',
		'submenu_active'=>'akun-list'
		);
		$this->load->view('admin/template/template',$data);
	}
	function add_akun()
	{
		$this->form_validation->set_rules('user', 'Nama Pengguna', 'required|min_length[4]|max_length[50]');
		$this->form_validation->set_rules('email', 'E-mail', 'required|valid_email');
		$this->form_validation->set_rules('sandi', 'Kata Sandi', 'required|min_length[8]');
		$this->form_validation->set_rules('level', 'Level Pengguna', 'required');
	
		if($this->input->post('add'))
		{
			if($this->form_validation->run() == FALSE)
			{
				$this->form_add();
				
			}else{
				$user=$this->input->post('user');
				$email=$this->input->post('email');
				$sandi=md5($this->input->post('sandi'));
				$level=$this->input->post('level');
				
				$this->mode_akun->make_acc($user,$email,$sandi,$level);
				
				redirect($this->form_add());					
			}
			
		}
		
	}

	function save_tut_link()
	{
		$data=$this->input->post('vid_link');
		
	}

	function media()
	{
		$this->auth->cek_auth();
		$data=array(
		'title'=>'Media',
		'head'=>'Tambah Logo dan Foto Kegiatan',
		'content'=>'admin/util/upload_gambar',
		'menu'=>$this->auth->filter_menu(),
		'menu_active'=>'menu_akun',
		'submenu_active'=>'akun-list'
		);
		$this->load->view('admin/template/template',$data);
	}

}
