<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Mode_akun extends CI_Model
{
	function Mode_akun()
	{
		parent::__construct();
		
	}
	function make_acc($u='',$e='',$s='',$l='')
	{
		$data=array(		
		'nama'=>$u,
		'password'=>$s,
		'email'=>$e,
		'level'=>$l
		);
		$this->db->set($data);		
		$this->db->insert('tbl_sys_pengguna');
	}
}
