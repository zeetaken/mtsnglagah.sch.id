<script type="text/javascript">
$(function(){	
	var uri="<?php echo base_url();?>index.php/admin/admin_ujian/baca_excel",
		fileExcel=$("#fExcel").val(),
		dropArea=document.getElementById('drop');
			
		/**
		 * handle semua aksi baca Data Excel 
		 */
										
		$("#tblcari").click(function(e){			
			$("#fExcel").click();
			e.preventDefault();						
		});		
		
		$('#baca').bind('click',function(e){			
			if(fileExcel==null){alert("tidak ada data");}else
			{
				$.ajax({
					url:uri,
					data:fileExcel,
					type:"POST",
					success:function(){alert("data "+e+" berhasil dibaca");}
					}).done(function(e){
				
				});
			}
			e.preventDefault();
		});
		/**
		 * baca data excel selesai
		 */		
});
</script>
<div id="droppingbox" >			
		<div id="drop">
			<center style="padding: 50px">
				<a>				
				seret dan taruh file Microsoft Excel anda di sini <br />
				Atau Gunakan pembaca Data Klasik dengan menekan tombol "cari File Excel" <br />
				kemudian tekan tombol "Baca Data"
				</a>
				<br /><br /><br />
			<form id="fileExcel" method="post" enctype="multipart/form-data">
				<input type="file" name="excelRead" accept="application/vnd.ms-excel" class="inp-hidden" id="fExcel" />
				<input type="button" class="tombol black medium" id="tblcari" value="Cari File Excel" />
				<input type="button" class="tombol red medium" id="baca" value="Baca Data" />				
			</form>
			</center>
		</div>	
	<div class="clear"></div>
</div>