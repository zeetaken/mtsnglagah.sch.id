<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mts extends CI_Controller {
    
    function __construct()
    {
        parent:: __construct();
    }
    
    public function index()
	{
	    $this->load->model('news');
	    $data=array(
	    'title'=>'MTSN Glagah Lamongan',
		'head'=>'Beaking News MTS',
		'isi'=> $this->news->tampil_all(),
		'content'=>'public/news'
		);
	    
	    $this->load->view('public/template/public_template',$data);	    
		
	}
	
	
	function login_form()
	{
		$this->load->view('public/login');
	}	
	
	
	function galeri()
	{
	    $data=array(
	    'title'=>'Galeri foto MTSN Glagah',
	    'head'=>'galeri foto MTSN Glagah',
		'content'=>'public/galeri'
		);
		$this->load->view('public/template/public_template',$data);
	}
	
	function tentang()
	{
	    $data=array(
	    'title'=>'Tentang MTSN Glagah',
	    'head'=>'Tentang MTSN Glagah',
		'content'=>'public/tentang'
		);
		$this->load->view('public/template/public_template',$data);
	}
//	prosessing data goes here			
	
	function login_handler()
	{
		$user=$this->input->post('nama');
		$pass=$this->input->post('sandi');
		$this->auth->_login($user,$pass);
	}
	
	function display_grafik(){
		$panggil=$this->input->post('send');
		switch ($panggil){
			case 'psb':	$this->psb->grafik_psb();
			break;
			
			case 'ujian': ;
			break;
			default:'<script>alert("tidak dapat memanggil data anda!!")</script>';
					
 		}
	}		
}
