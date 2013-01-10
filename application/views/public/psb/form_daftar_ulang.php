<script type="text/javascript" src="<?php echo base_url();?>asset/public/js/validasi.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>asset/public/js/api-pendaftaran.js"></script>

        <?php
        /*** array utility Mulai di sini */
        $jk=array(
        ''=>'--jenis kelamin--',
        'L'=>'Laki-laki',
        'P'=>'perempuan'
		);
		
		        
        $agama=array(
        'islam'=>'Islam',
        'kristen'=>'Kristen',
        'hindu'=>'Hindu',
        'budha'=>'Budha',
		);
        ?>
        <form id="daftarpsb" enctype="multipart/form-data" method="post" action="#">
        	<!--**
        		**	======================Struk Pembayaran Mulai==============
        		**
        	-->
        <div id="data">
        	<div class="struk-box">
        		<input type="file" name="struk" style="display: none" />
        		<center>
        			<p>foto Scan Struk Pembayaran<br /></p><br />
        			<span class="tombol-foto tombol orange medium">cari foto</span>
        		</center>
        	</div><br />
        	<?php
        		echo form_label('Nomor Pembayaran :')."<br>";
        		echo form_input(array('name'=>'no_byr','id'=>'nama', 'class'=>'txt'))."<br><br>";
        	?>
        	<input type="button" id="nextto1" class="tombol blue" value="lanjut" />
        </div>
        <!--**
        		**	==================Struk Pembayaran Selesai================
        		**
        		* 	==================Data umum siswa====================
        	-->        	
		<div id="data1" style="display: none">
			<h3>Data Pribadi Calon Siswa</h3>
			<div class="profil-box right-profil">
				<input type="file" name="fprofil" style="display: none" />
				<center>
					<p>Foto Siswa <br />Hitam-putih</p><br />
					<span class="tombol-foto tombol orange medium">cari foto</span>
				</center>
			</div>
		<?php				
		echo form_label('Nomor Induk Siswa Nasional :')."<br>";
        echo form_input(array('name'=>'nisn','id'=>'nama', 'class'=>'txt'))."<br>";
        echo form_label('Nama Lengkap :')."<br>";
        echo form_input(array('name'=>'nm_siswa','id'=>'nama', 'class'=>'txt'))."<br>";
		echo form_label('Nama panggilan :')."<br>";
        echo form_input(array('name'=>'nick_name','id'=>'nick', 'class'=>'txt'))."<br>";
		echo form_label('Jenis Kelamin :')."<br>";
		echo form_dropdown('jk',$jk,'--jenis kelamin--')."<br>";
		echo form_label('Tempat Lahir (kota)')."<br>";
        echo form_input(array('name'=>'t_lahir','id'=>'tl', 'class'=>'txt'))."<br>";
		echo form_label('Tanggal Lahir (hari-bulan-tahun)')."<br>";
        echo form_input(array('name'=>'tgl_hr','id'=>'tgl_hr', 'class'=>'txt','size'=>'5'))."-";
		echo form_input(array('name'=>'tgl_bln','id'=>'tgl_bln', 'class'=>'txt','size'=>'5'))."-";
		echo form_input(array('name'=>'tgl_th','id'=>'tgl_th', 'class'=>'txt','size'=>'5'))."<br>";
		echo form_label('Agama :')."<br>";
		echo form_dropdown('agama',$agama,'--Agama--')."<br>";
		echo form_label('Anak Ke :')."<br>";
        echo form_input(array('name'=>'anak_ke','id'=>'nick', 'class'=>'txt'))."<br>";
		echo form_label('Status anak :')."<br>";
        echo form_input(array('name'=>'status','id'=>'nick', 'class'=>'txt'))."<br>";
		echo form_label('Jumlah Saudara :')."<br>";
        echo form_input(array('name'=>'jml_sdr','id'=>'nick', 'class'=>'txt'))."<br>";
		echo form_label('No Telpon :')."<br>";
        echo form_input(array('name'=>'telp','id'=>'skul', 'class'=>'txt'))."<br><br>";		
        echo form_label('Alamat :')."<br>";
        echo form_textarea(array('name'=>'alamat','id'=>'almt', 'class'=>'txt'))."<br><br>";
		?>
		<input type="button" id="nextto2" class="tombol blue" value="lanjut" />
		</div>
		<!--**
        		**	==================Data umum siswa Selesai================
        		**
        		* 	==================Data Sekolah Mulai====================
        	-->
		<div id="data2" style="display: none">
			
		<?php				
		echo form_label('Sekolah Asal :')."<br>";
        echo form_input(array('name'=>'skul','id'=>'skul', 'class'=>'txt'))."<br><br>";
		echo form_label('Alamat Sekolah :')."<br>";
        echo form_textarea(array('name'=>'alamat','id'=>'almt', 'class'=>'txt'))."<br><br>";
        echo form_label('No Telp Sekolah :')."<br>";
        echo form_input(array('name'=>'skul','id'=>'skul', 'class'=>'txt'))."<br><br>";
        ?>
        <input type="button" id="nextto3" class="tombol blue" value="lanjut" />
        </div>
        <!--**
        		**	==================Data Sekolah Selesai================
        		**
        		* 	==================Data Orangtua Siswa Mulai====================
        	-->
        <div id="data3" style="display: none">
		<?php
		echo "<h3>Data Orang Tua</h3>";
		echo form_label('Nama Ayah ')."<br>";
        echo form_input(array('name'=>'ayah','class'=>'txt'))."<br>";
		echo form_label('Nama Ibu ')."<br>";
        echo form_input(array('name'=>'ibu', 'class'=>'txt'))."<br>";
		echo form_label('Pendidikan Ayah ')."<br>";
        echo form_input(array('name'=>'pend_ayah', 'class'=>'txt'))."<br>";
		echo form_label('Pendidikan Ibu ')."<br>";
        echo form_input(array('name'=>'pend_ibu','class'=>'txt'))."<br>";		
		echo form_label('Pekerjaan Ayah')."<br>";
        echo form_input(array('name'=>'krj_ayah', 'class'=>'txt'))."<br>";
        echo form_label('Pekerjaan Ibu')."<br>";
        echo form_input(array('name'=>'krj_ibu', 'class'=>'txt'))."<br>";
		echo form_label('Agama Ayah')."<br>";
        echo form_input(array('name'=>'agama_ayah','class'=>'txt'))."<br>";
		echo form_label('Agama Ibu')."<br>";
        echo form_input(array('name'=>'agama_ibu','class'=>'txt'))."<br>";
		echo form_label('Alamat ')."<br>";
        echo form_textarea(array('name'=>'alamat_wali', 'class'=>'txt'))."<br>";
		echo form_label('No Telp')."<br>";
        echo form_input(array('name'=>'telp_ortu','class'=>'txt'))."<br>";
		?>
		<input type="button" id="nextto4" class="tombol blue" value="lanjut" />
		</div>
		
		<div id="data4" style="display: none">
		<?php
		echo "<h3>Data Wali Murid</h3>";
		echo form_label('Nama Wali ')."<br>";
        echo form_input(array('name'=>'wali','class'=>'txt'))."<br>";		
		echo form_label('Pendidikan ')."<br>";
        echo form_input(array('name'=>'pend_ayah', 'class'=>'txt'))."<br>";				
		echo form_label('Pekerjaan')."<br>";
        echo form_input(array('name'=>'krj_ayah', 'class'=>'txt'))."<br>";        
		echo form_label('Agama')."<br>";
        echo form_input(array('name'=>'agama_ayah','class'=>'txt'))."<br>";		
		echo form_label('Alamat ')."<br>";
        echo form_textarea(array('name'=>'alamat_wali', 'class'=>'txt'))."<br>";
		echo form_label('No Telp')."<br>";
        echo form_input(array('name'=>'telp_wali','class'=>'txt'))."<br>";
		?>
		<input type="button" id="nextto5" class="tombol blue" value="lanjut" />
		</div>
		
		<div id="data5" style="display: none">
		<?php
		echo "<h3>Nilai</h3>";
		echo form_label('Bahasa Indonesia ')."<br>";
        echo form_input(array('name'=>'bi','id'=>'bi', 'class'=>'txt','size'=>'10'))."<br>";
		echo form_label('Bahasa Inggris')."<br>";
        echo form_input(array('name'=>'big','id'=>'big', 'class'=>'txt','size'=>'10'))."<br>";
		echo form_label('Matematika')."<br>";
        echo form_input(array('name'=>'mtk','id'=>'mtk', 'class'=>'txt','size'=>'10'))."<br>";
		echo form_label('IPA (SAINS)')."<br>";
        echo form_input(array('name'=>'ipa','id'=>'ipa', 'class'=>'txt','size'=>'10'))."<br>";
		echo form_label('Agama Islam')."<br>";
        echo form_input(array('name'=>'pai','id'=>'pai', 'class'=>'txt','size'=>'10'))."<br>";
				
				
        echo "<br>" . form_submit('daftar','Selesai','class="submit"');
        echo form_close();
        ?>        
        </div>
