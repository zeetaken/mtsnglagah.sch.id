<script type="text/javascript" src="<?php echo base_url();?>asset/apijs/api-soal.js"></script> 
<div class="panel-soal">
    	
<div id="panel-tbl">
	<ul>
		<li><a id="first-navi" title="Halaman Soal Awal"><img src="<?php echo base_url();?>asset/public/images/soal/hide-left32.png" /></a></li>
		<li><a id="prev" title="Halaman Soal sebelumnya"><img src="<?php echo base_url();?>asset/public/images/soal/navigate-left32.png" /></a></li>
		<li><div id="halaman"></div></li>
		<li><a id="next" title="Halaman Soal selanjutnya"><img src="<?php echo base_url();?>asset/public/images/soal/navigate-right32.png" /></a></li>
		<li><a id="last-navi" title="Halaman Soal Terakhir"><img src="<?php echo base_url();?>asset/public/images/soal/hide-right32.png" /></a></li>
		<li><a id="zoom-in" title="Perbesar huruf"><img src="<?php echo base_url();?>asset/public/images/soal/Zoom_in32.png" /></a></li>
		<li><a id="zoom-out" title="perkecil huruf"><img src="<?php echo base_url();?>asset/public/images/soal/Zoom_out32.png" /></a></li>
		<li><div id="wkt"></div></li>
		<li><div id="jam"></div></li>
	</ul>
</div>
<form id="form-soal">        	
	<div id="soal"></div>
	<div id="pilihan-jwb">
		<div id="pil-a"></div>
		<div id="pil-b"></div>
		<div id="pil-c"></div>
		<div id="pil-d"></div>
	</div>
</form>		
	
	<div id="identitas">
		<h4>IDENTITAS PESERTA</h4>
		<div class="clear"></div>
		
		<table>
			<tr>
				<td><label>Nama Peserta: </label></td>
				<td><label>Nomer Pendaftaran: </label></td>
				<td><label>Nomer Ujian: </label></td>
				<td><label></label></td>
			</tr>
			<tr><form id="idpeserta">
				<td><input type="text" name="nama" class="txt" /></td>
				<td><input type="text" name="no_daftar" class="txt" /></td>
				<td><input type="text" name="no_ujian" class="txt" /></td>
				<td><input type="button" id="save" class="submit" value="simpan" /></td>
				</form>
			</tr>
		</table>
		        	
	</div>
</div>
