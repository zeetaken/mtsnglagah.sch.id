<div id="inputbox" >
<?php
if($mapel=='')
{
	echo "
	belum ada data matapelajaran
	";
	$mapta=array(''=>'Mata Pelajaran Masih Kosong');
}else{
		$mapta['']='==pilih Matapelajaran==';		
		foreach ($mapel->result() as $mat) {
		$mapta[$mat->mapelid]=$mat->nm_mapel;
		}	
}
$pil=array(
''=>'--Pilih Jawaban Benar--',
'A' => 'Jawaban A ',
'B'=>'Jawaban B ',
'C'=>' Jawaban C ',
'D'=>'Jawaban D ' 
);
echo validation_errors();
?>
<form>
	<table>
		<tr>
			<td>
				<label>Pilih Matapelajaran</label>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo form_dropdown('mapel',$mapta,'');?>
			</td>
		</tr>
		<tr>
			<td>
				<label>Tuliskan Soal</label>
			</td>
			<td>
				<label>Pilihan A</label>
			</td>
			<td>
				<label>Pilihan B</label>
			</td>
		</tr>
		<tr>
			<td colspan="1" rowspan="3"><?php echo form_textarea(array('cols'=>'50', 'rows'=>'23', 'name'=>'soal'));?></td>
			<td><?php echo form_textarea(array('name'=>'jwba','cols'=>'25', 'rows'=>'10'));?></td>
			<td><?php echo form_textarea(array('name'=>'jwbb','cols'=>'25', 'rows'=>'10'));?></td>			
		</tr>
		<tr>
			<td><label>pilihan C</label></td>
			<td><label>pilihan D</label></td>
		</tr>
		<tr>
			<td><?php echo form_textarea(array('name'=>'jwbc','cols'=>'25', 'rows'=>'10'));?></td>
			<td><?php echo form_textarea(array('name'=>'jwbd','cols'=>'25', 'rows'=>'10'));?></td>
		</tr>
		<tr>
			<td><br /></td><td></td><td></td>			
		</tr>
		<tr>
			<td><label>Pilihan Benar : <?php echo form_dropdown('jwbbnr',$pil,'');?></label></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td><br /></td><td></td><td></td>
		</tr>
		<tr>
			<td><?php echo form_submit(array('name'=>'terbit','class'=>'submit','value'=>'Terbitkan'));?></td>
			<td></td>
			<td></td>
		</tr>
	</table>
</form>
</div>