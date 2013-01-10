<script type="text/javascript" src="<?php echo base_url()?>asset/apijs/api-drag-drop.js"></script>
	<!--
		======================file uploading goes here========================
	-->				
<div id="drop" class="toggle-uppanel">
	<center>
		<a>
		File Upload Gambar <br />
		seret dan taruh file Gambar anda di sini <br />
		(Hanya support untuk mozzila firefox 3.6+, opera 9+, chrome dan sebagian webbrowser)
		</a>
		<form id="up_vid" method="post" enctype="multipart/form-data" action="#">
			<input type="file" name="video" accept="video/*" class="inp-hidden" id="fklasik" multiple />
			<button class="tombol black medium" id="tbl_cari">Cari Gambar</button>
			<button class="tombol red medium" id="sub" > Upload </button>
		</form>
		
	</center>
<div class="clear"></div>	
</div>	
		
	
	