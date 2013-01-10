<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 class News extends CI_Model
 {
 	
 	function News()
	{
		parent:: __construct();
			
	}
    function tampil_all()
    {
        $query=$this->db->get('tbl_sys_berita');
		return $query;
	}
	
    function buat_berita($jud='',$isi='',$kat='')
    {
    	$this->load->library('session');
    	$usr=$this->session->userdata('level');
     	$this->db->set('jud',$jud);
		$this->db->set('isi',$isi);
		$this->db->set('kat',$kat);
		$this->db->set('tgl','NOW()');
		$this->db->set('auth',$usr);
		$this->db->insert('tbl_sys_berita');
		
    }
	
	function update_news($id,$data)
	{
		$this->db->where('id',$id);
		$this->db->update('tbl_sys_berita',$data);
	}
	
	function delete_news($id)
	{
		$this->db->where('id',$id);	
		$this->db->delete('tbl_sys_berita');		
	}
 }