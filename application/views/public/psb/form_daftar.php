<script type="text/javascript" src="<?php echo base_url();?>asset/public/js/validasi.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>asset/apijs/api-pendaftaran.js"></script>


	        <form id="daftarpsb" enctype="multipart/form-data" method="post" action="#">
	        <div id="data">
	        	<h3>Data Pribadi Calon Siswa</h3>	<br />
			<?php
			echo form_label('Nomor Induk Siswa Nasional :')."<br>";
	        echo form_input(array('name'=>'nisn','id'=>'nisn', 'class'=>'txt penting'))."<br>";
	        echo form_label('Nama Lengkap :')."<br>";
	        echo form_input(array('name'=>'nm_siswa','id'=>'nama', 'class'=>'txt penting'))."<br>";
			echo form_label('Sekolah Asal :')."<br>";
	        echo form_input(array('name'=>'skul','id'=>'skul', 'class'=>'txt penting'))."<br>";		
			echo form_label('Tempat Lahir (kota)')."<br>";
	        echo form_input(array('name'=>'t_lahir','id'=>'tl', 'class'=>'txt penting'))."<br>";
			echo form_label('Tanggal Lahir (hari-bulan-tahun)')."<br>";
	        echo form_input(array('name'=>'tgl_hr','id'=>'tgl_hr', 'class'=>'txt penting','size'=>'5'))."-";
			echo form_input(array('name'=>'tgl_bln','id'=>'tgl_bln', 'class'=>'txt penting','size'=>'5'))."-";
			echo form_input(array('name'=>'tgl_th','id'=>'tgl_th', 'class'=>'txt penting','size'=>'5'))."<br>";		
			echo form_label('Nama Orang tua :')."<br>";
	        echo form_input(array('name'=>'wali','id'=>'wali', 'class'=>'txt penting'))."<br>";
			echo form_label('No Telpon /HP :')."<br>";
	        echo form_input(array('name'=>'telp','id'=>'angka', 'class'=>'txt penting'))."<br><br>";		
	        echo form_label('Alamat :')."<br>";
	        echo form_textarea(array('name'=>'alamat','id'=>'almt', 'class'=>'txt penting'))."<br><br>";
			?>
			
			<input type="button" id="nextto1" class="tombol blue" value="lanjut" />
			</form>
			</div>
			<!--**
	        		**	==================Data umum siswa Selesai================
	        		**
	        		* 	==================Data Sekolah Mulai====================
	        	-->
			<div id="data1" style="display: none">
				<h3>DATA PIAGAM</h3><br /><br />
				<H6>KLIK JIKA SISWA MEMPUNYAI PIAGAM YANG KRITERIANYA TERTERA DI BAWAH INI</H6>		        
	        	<table class="tabel-akademik">	        		
	        	<?php
	        	foreach($pi_juara->result() as $juara){
	        		echo "<tr>";
	        		foreach ($pi_tingkat->result() as $tingkat) {
	        			echo "<tr>";
						foreach ($pi_tipe->result() as $key) {						
							echo '<td>							
										<form class="tombol abu medium" id="pia">
										<input type=hidden name=piagam_juaraid value='.$juara->piagam_juaraid.' />
										<input type=hidden name=piagam_tipeid value='.$key->piagam_tipeid.' />
										<input type=hidden name=piagam_tingkatid value='.$tingkat->piagam_tingkatid.' />
										'
										.'juara '.$juara->juara.'<br />'
										.'tingkat '.$tingkat->pi_tingkat.'<br />'
										.$key->tipe_piagam
										.'</form>
									</td>';	
						}	        		
						echo "</tr>";
					}
					echo "</tr>";
				}
	        	
	        	echo "</table><br /><br />";
				echo "<b>Keterangan : <b><br />";
				echo "<ol>";				
				foreach ($pi_tipe->result() as $key) {												
							echo '<li>'.$key->tipe_piagam.' : '.$key->keterangan.'</li>';								
						}
				echo "</ol><br /><br />";
				
	        	?>
	        	<input type="button" id="nextto2" class="tombol blue" value="lanjut" />
	        </div>
	        
	        <div id="data2" style="display: none">
	        	<h3>DATA AKADEMIK</h3><br />
	        	<fieldset><legend>NILAI KELAS V</legend><br />
	        	<form id="raport">
	        		<label for="ipas5">Nilai IPA :</label><br />
	        		<input type="text" name="ipas5" class="txt" /><br />
	        		<label for="ipas5">Nilai Matematika :</label><br />
	        		<input type="text" name="mtk5" class="txt" /><br />
	        		<label for="ipas5">Nilai Bahasa Indonesia :</label><br />
	        		<input type="text" name="bi5" class="txt" /><br />		
	        	</form>
	        	</fieldset><br /><br />
	        	<fieldset><legend>NILAI KELAS VI</legend><br />
	        	<form id="raport">
	        		<label for="ipas5">Nilai IPA :</label><br />
	        		<input type="text" name="ipas6" class="txt" /><br />
	        		<label for="ipas5">Nilai Matematika :</label><br />
	        		<input type="text" name="mtk6" class="txt" /><br />
	        		<label for="ipas5">Nilai Bahasa Indonesia :</label><br />
	        		<input type="text" name="bi6" class="txt" /><br />		
	        	</form>
	        	</fieldset>
	        	<br /><br />
	        	<?php
	        	echo form_submit('daftar','Selesai','class="submit"');
	        	?>	        	
	        </div>
		
	