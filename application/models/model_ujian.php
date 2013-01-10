<?php 	
class Model_ujian extends CI_Model
{
	
	var $jml_bnr=NULL;
		
	function Ujian()
	{
		parent::__construct();
	}
	
	function get_jadwal()
	{
		
	}		
	
	/**
	 * =========== SOAL UJIAN DIMULAI =================
	 */
	function get_soal()
	{
		$data=$this->db->get('tbl_sys_soal');
		return $data;
	}
	function set_soal($data='')
	{
		$this->db->insert('tbl_sys_soal',$data);
	}
	function cek_jawaban($data)
	{
		foreach ($data as $key => $jwb) {
				// cek soal dengan menggunakan idnya
			$this->db->where($data['id']);
			$this->db->select('tbl_sys_soal');			
			
			
			if($d->result()===TRUE){
				$jml_bnr+=$jml_bnr;
			}
			
		}
	}
	
	function edit_soal($id,$data){
		
	}
	
	function json_get_soal(){
		$soal=$this->get_soal();
		$json='{ "soal":[';	
        	foreach ($soal->result() as $uji) :
				$json.='{"soalid":'.$uji->soalid.',
							"tanya":"'.$uji->soal.'",
							"pila":"'.$uji->pil_a.'",
							"pilb":"'.$uji->pil_b.'",
							"pilc":"'.$uji->pil_c.'",
							"pild":"'.$uji->pil_d.'",
							"jwb":"'.$uji->jwb.'",
							"kdmapel":'.$uji->kd_mapel.'},';	
								
				endforeach;
		$json=substr($json, 0,strlen($json)-1);		
		$json.=']';
		$json.='}';		
		echo $json;
	}
	
	/**
	 * ================ SOAL UJIAN BERAKHIR ===========================
	 *
	 * ================= Mata Pelajaran dimulai ===========================
	 */
	function add_multi_mapel($data=''){
		foreach ($data as $key) {
			$this->db->insert_batch('tbl_mapel',$data[$key]);
		}
	}
	function add_single_mapel($nama='',$kode=''){
		$data=array('mapelid'=>'','kd_mapel'=>$kode,'nm_mapel'=>$nama);
		$this->db->insert('tbl_mapel',$data);
	}
	function del_single_mapel($nama=''){
		$data=array('nm_mapel'=>$nama);
		$this->db->delete('tbl_mapel',$data);
	}
	function add_single_master_mapel($nama=''){
		$data=array('id'=>'','nm_master_mapel'=>$nama);
		$this->db->insert('tbl_mapel_master',$data);
	}
	function del_single_master_mapel($nama=''){
		$data=array('nm_master_mapel'=>$nama);
		$this->db->delete('tbl_mapel_master',$data);
	}	
	function get_mapel()
	{
		$data=$this->db->get('tbl_mapel');
		foreach ($data->result() as $row) {
			$mapel[]=$row;
			return $mapel;
		}
	}
	
	function get_mapel_master()
	{
		$data=$this->db->get('tbl_mapel_master');
		foreach ($data->result() as $row) {
			$mapel[]=$row;
			return $mapel;
		}
	}
	/**
	 *  =============== Mata Pelajaran Berakhir ======================
	 */
}
