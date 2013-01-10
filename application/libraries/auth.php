<?php 
// code by Anggy Trisnawan and modified by Novan Dwi
class Auth
{
	var $ob=NULL;
	function __construct()
	{
		// instance objek CI
		$this->ob = get_instance();	
	}
	
	function _login($user,$pass)
	{
		//cek login
		$this->ob->db->from('tbl_sys_pengguna');
		$this->ob->db->where('nama',$user);
		$this->ob->db->where('password=MD5("'.$pass.'")','',false);
		$hasil=$this->ob->db->get();
		
		if($hasil->num_rows() > 0)
		{
			//jika ada, masukkan session
			$data=$hasil->row();
			
			$session=array(
			'nama_user'=>$data->nama,
			'level'=>$data->level,
			'session_id'=>$data->id_user
			);
			$this->ob->session->set_userdata($session);
			redirect(base_url().'index.php/wp-admin');
			return TRUE;
		}
		else
		{
			redirect(base_url().'index.php/logintrue287726jdkjsi84kfh48fwijf84ijf3494423xxpqWf');
			return false;
		}
		
	}
	function logout()
	{
		$this->ob->session->sess_destroy();
		redirect(base_url());
	}
	function cek_auth()
	{
		
		if($this->ob->session->userdata('level') == '' )
		{
			redirect(base_url().'index.php/logintrue287726jdkjsi84kfh48fwijf84ijf3494423xxpqWf');
			return FALSE;
		}
		else 
		{
			
			return TRUE;
		}
	}
	function filter_menu()
	{
		
		$level_user=$this->ob->session->userdata('level');
		switch($level_user){
			case 'super_user': $menunya='admin/util/menu/menu';
			return $menunya;
			break;
			case 'admin_psb': $menunya='admin/util/menu/menu_psb';
			return $menunya;
			break;
			case 'admin_ujian': $menunya='admin/util/menu/menu_ujian';
			return $menunya;
			break;			
		}
	}
	
}
