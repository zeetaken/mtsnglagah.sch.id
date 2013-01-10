<?php if($isi->num_rows() > 0)
	{
		foreach ($isi->result() as $data):
			echo "<h3 >".$data->jud."</h3>";			
			echo "<p alt='$data->jud'>".$data->isi."<br />";
			echo "<div style='display:inline-block'> 
						<div>ditulis Oleh :".$data->auth."</div>
						<div> Pada Tanggal :".$data->tgl."</div>
				</div>";
			endforeach;
			
	}else{
	$warning='Belum ada data yang dimuat';
	echo $warning;
	}	
	
?>           
