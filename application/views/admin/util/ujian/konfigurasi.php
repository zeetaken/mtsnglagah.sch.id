<script type="text/javascript" src="<?php echo base_url()?>asset/apijs/api-drag-drop.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>asset/apijs/api-mapel.js"></script>
<?php $this->load->view('admin/util/tny_mce');?>
<script type="text/javascript">
	var uri="<?php echo base_url();?>index.php/admin/admin_ujian/upload_vid",
		uriMapel="<?php echo base_url();?>index.php/admin/admin_ujian/add_mapel",
		x='';
	$(function(){		
		/**				 		  
		 *	=================== Jadwal Pelajaran diMulai =====================
		 */
		$('#menu_jadwal').bind('click',function(e){
			
			$('#inp_vid,#in_mapel').slideUp(1000);			
			$('#in_jadwal').slideDown(1000);					
			e.preventDefault();			
		});
	});	
</script>
<div style="float: left">
	
<!--
	================== Jadwal Ujian Mulai di sini =======================
-->	
	<div id="in_jadwal">
		<h2>TAMBAH JADWAL UJIAN</h2>			
		<form id="jadwal_ujian">
			<textarea>				
			</textarea><br />
			<button id="jdw" class="tombol green medium">Simpan</button>
		</form>
	</div>
<!--
	======================end jadwal ujian ==========================
	================== mata pelajaran Mulai di sini =======================
-->
	<div id="in_mapel" style="display: none">
		<div class="input-manual">			
			<label> input manual : </label><br />
			<input id="mapel_manual" type="text" class="inp-form" /><br />
			<button id="inmapel" class="button orange small">tambah</button>			
		</div>
		<div class="clear"></div><br />
		<div style="width: 300px; min-height: 200px; background:#DCDCDA; border-radius: 5px; float: left">
			<h2 class="orange"><center> DAFTAR MASTER MATA PELAJARAN </center></h2>
			<ul id="master_mapel"></ul>
		</div>	
		
		<div style="margin-left:100px; width: 150px; min-height: 100px; background:#DCDADA; border-radius: 5px; float: left">
			<h2 class="orange"><center> Hapus Mapel Aktif</center></h2>
			<div style="margin-left:30px;background: url('<?php echo base_url()?>/asset/img/trash_64.png') 10px no-repeat;width: 100px; min-height: 80px;" id="del_mapelist"></div>
		</div>
		<div id="sort_mapelist" style=" margin-left:100px;width: 200px; min-height: 100px; background:#DCDCDA; border-radius: 5px; float: left">
			<h2 class="orange"><center> List Mapel Aktif</center></h2>
			<ul></ul>
		</div>			
	</div>
	<!--
	================== mata pelajaran berakhir di sini =======================
	-->
</div>

<?php $this->load->view('admin/util/menu/menu_config_right');?>