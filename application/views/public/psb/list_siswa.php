<script type="text/javascript" src="<?php echo base_url();?>asset/apijs/public-cari-siswa.js"></script>

<div style="float: right; margin-right: 20px;margin-bottom: 30px">
	<h4>Cari Siswa : </h4>
	<input type="text" class="cari-siswa txt" value="" />
</div>
<div class="msg"></div>
<br /><br />

<div class="hasil" style="margin:30px 10px 0 20px">
	<table>
		<tr>
			<td>No</td>
			<td>No Daftar</td>
			<td>Nama Calon Siswa</td>
			<td>Jenis Kelamin</td>
			<td>TTL</td>
			<td>Alamat</td>
		</tr>
	
	    <?php
	    $i=1; 
		foreach ($data->result() as $siswa) {			
		echo'
		<tr>
			<td>'.$i.'</td>
			<td>'.$siswa->no_daftar.'</td>		
			<td>'.$siswa->nm_siswa.'</td>		
			<td>'.$siswa->jk.'</td>
			<td>'.$siswa->t_lahir." / ".$siswa->tgl_lahir.'</td>
			<td>'.$siswa->alamat.'</td>				
		</tr>';
		$i++;
		}
		?>
	</table>
</div>