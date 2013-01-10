<script type="text/javascript">
	$(document).ready(function(){
		$('#<?php echo $menu_active;?>').removeClass().addClass('current');
		$('#<?php echo $submenu_active;?>').slideDown().addClass('logo');
		$('#menu_dashboard').bind('click',function(){
			$('#menu_dashboard').removeClass().addClass('current');
			$('#menu_psb,#menu_akun,#menu_ujian').removeClass().addClass('select');
			$('#dashboard-list,#psb-list,#ujian-list,#akun-list').slideUp().removeClass('logo');
			$('#dashboard-list').slideDown().addClass('logo');
		});
		$('#menu_psb').bind('click',function(){
			$('#menu_psb').removeClass().addClass('current');
			$('#menu_dashboard,#menu_akun,#menu_ujian').removeClass().addClass('select');
			$('#dashboard-list,#psb-list,#ujian-list,#akun-list').slideUp().removeClass('logo');
			$('#psb-list').slideDown().addClass('logo');
		});
		$('#menu_ujian').bind('click',function(){
			$('#menu_dashboard,#menu_psb,#menu_akun').removeClass().addClass('select');
			$('#menu_ujian').removeClass().addClass('current');
			$('#dashboard-list,#psb-list,#ujian-list,#akun-list').slideUp().removeClass('logo');
			$('#ujian-list').slideDown().addClass('logo');
		});
		$('#menu_akun').bind('click',function(){
			$('#menu_dashboard,#menu_psb,#menu_ujian').removeClass().addClass('select');
			$('#menu_akun').removeClass().addClass('current');
			$('#dashboard-list,#psb-list,#ujian-list,#akun-list').slideUp().removeClass('logo');
			$('#akun-list').slideDown().addClass('logo');
		});
		$('#dashboard-list img,#psb-list img,#ujian-list img,#akun-list img').hover(function() {
		  $(this).animate({'width' :'64px'},100,'swing');
		},function() {
		  $(this).animate({'width' :'60px'},100,'swing');
		});
		
	});
	
		
</script>
<div id="dashboard-list" style="display: none">
	<a href="<?php echo base_url();?>index.php/wp-admin/posting" title="Posting berita baru" class="info-tooltip"><img src="<?php echo base_url();?>asset/img/glossary64.png" /></a>
	<a href="<?php echo base_url();?>index.php/wp-admin/edit-berita" title="Edit Daftar berita" class="info-tooltip"><img src="<?php echo base_url();?>asset/img/tests64.png" /></a>
</div>
<div id="psb-list" style="display: none"> 
	<a href="<?php echo base_url();?>index.php/wp-admin/lihat-daftar-siswa" title="List Pendaftar Calon Siswa Baru" class="info-tooltip"><img src="<?php echo base_url();?>asset/img/surveys64.png" /></a>
	<a href="<?php echo base_url();?>index.php/wp-admin/grafik-psb" title="Grafik Penerimaan Siswa Baru" class="info-tooltip"><img src="<?php echo base_url();?>asset/img/statistics_64.png" /></a>
	<a href="<?php echo base_url();?>index.php/wp-admin/konfig-psb" title="Konfigurasi PSB" class="info-tooltip"><img src="<?php echo base_url();?>asset/img/maintenance64.png" /></a>
</div>
<div id="ujian-list" style="display: none">
	<a href="<?php echo base_url();?>index.php/wp-admin/ujian" title="Buat Soal Baru" class="info-tooltip"><img src="<?php echo base_url();?>asset/img/catalog64.png" /></a>
	<a href="<?php echo base_url();?>index.php/wp-admin/edit-soal" title="Edit Soal" class="info-tooltip"><img src="<?php echo base_url();?>asset/img/tests64.png" /></a>
	<a href="<?php echo base_url();?>index.php/wp-admin/lolos-seleksi" title="List Siswa Yang lolos Seleksi" class="info-tooltip"><img src="<?php echo base_url(); ?>asset/img/options64.png" /></a>
	<a href="<?php echo base_url();?>index.php/wp-admin/pembagian-kelas" title="Daftar Pembagian Kelas" class="info-tooltip"><img src="<?php echo base_url(); ?>asset/img/billboard64.png" /></a>

</div>
<div id="akun-list" style="display: none">
	<a href="<?php echo base_url();?>index.php/wp-admin/konfigurasi-sitem" title="Tambah Akun Administrator" class="info-tooltip"><img src="<?php echo base_url();?>asset/img/user-admin.png" /></a>
	<a href="<?php echo base_url();?>index.php/wp-admin/media" title="Upload Logo Sekolah dan Foto kegiatan" class="info-tooltip"><img src="<?php echo base_url();?>asset/img/picture.png" /></a>	
</div>