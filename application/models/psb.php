<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Psb extends CI_Model
{
    function __construct()
    {
        parent:: __construct();
    }
    function simpan_data($data='')
    {
        $this->db->query($data);
    }
    
    function update_data($data)
    {
        $this->db->update('');
    }
    function data_all_siswa()
    {
        $query=$this->db->get('tbl_siswa');
        foreach($query->result() as $row)
	    {
		echo $row->no_induk;
	    }
            return $row;
    }
	
	function pengumuman_siswa()
	{
		
	}
	function grafik_psb(){
		$data=$this->db->get('v_grafik_psb');
				
				$json='{"grafik":[';		
				foreach ($data->result() as $grafik) {					
					$json.='{
						"thnawl":"'.$grafik->tahun_awal.'",
						"thnakhr":"'.$grafik->tahun_akhir.'",
						"jml":'.$grafik->jml_siswa.'},';					
				}
						
				$json=substr($json, 0,strlen($json)-1);
				$json.=']';
				$json.='}';
				echo $json;
	}
	function sukses()
	{
		$this->load->library('fpdf');
		
		
	}
	
	function find_sis_($data)
	{
//		$sql="SELECT * FROM tbl_siswa WHERE no_daftar LIKE %".$data."% OR nm_siswa LIKE %".$data."%";
//		$this->db->like('no_daftar',$data,'after');
//		$this->db->or_like('nm_siswa',$data,'after');		
		$hasil=$this->db->get('tbl_siswa');

//		$hasil=$this->db->query($sql);
		return $hasil->result();
	}
	
	/**
	 *  fungsi untuk mendapatkan list piagam yang dimiliki peserta
	 */
	 
	 function get_piagam_tipe(){
	 	$piagam=$this->db->get('tbl_piagam_tipe');		
		return $piagam;
	 }
	 function get_piagam_juara(){
	 	$piagam=$this->db->get('tbl_piagam_juara');		
		return $piagam;
	 }
	 function get_piagam_tingkat(){
	 	$piagam=$this->db->get('tbl_piagam_tingkat');		
		return $piagam;
	 }


}