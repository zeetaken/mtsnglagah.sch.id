/**
 * @author Novan
 */
$(function(){	
	var id=[],
		pi=[],
		ra=[],
		penting=$(".penting").val();
	var data=[id,pi];
	
	
	
	$("#nextto1").click(function(e){
		//		konstruksi variable
		var form=$("#daftarpsb").serialize();		
		id.push(form);
		
		$("#data").slideUp();
		$("#data1").slideDown();
		return false;
	});	
	
	$("#nextto2").click(function(e){					
		$("#data1").slideUp();
		$("#data2").slideDown();
		return false;
	});
	$("#nextto3").click(function(e){
		
		$("#data2").slideUp();
		$("#data3").slideDown();
		return false;
	});
	$("#nextto4").click(function(e){
		$("#data3").slideUp();
		$("#data4").slideDown();
		return false;
	});	
	
	
	/**
	 * switch class kondisi hover
	 */
	
	$(".abu").hover(function(){
		$(this).toggleClass("abu orange");
	});
	
	$(".abu").click(function(){
		var piagam=$(this).serialize();
		pi.push(piagam);
		
		$(this).fadeOut(500);
	});
		/*
		 * Event klik submit ----------mulai--------------
		 */ 
		
		$(':submit').bind('click',function(e){

			$('#status').after('<span class="status">MASIH MENGIRIM DATA.......</span>');
			
			$.ajax({
				url:'psb/psb_control/form_kontrol_psb',
				data:{daftar:data},				
				type:'POST',
				statusCode:{
					404:function(){
						$('#status').next('span').remove();
						$('#status').after('<span class="status">Alamat Tujuan Tidak ditemukan</span>');
						}
					}
			}).done(function(e){
				$('#status')
				.next('span')				
				.fadeOut(1000).remove();
				$('#status')				
				.after(e)
				.delay(3000)								
				.next('span')
				.fadeOut(5000);
			});
			return false;						
		});
		// Event klik submit ----------berakhir--------------		
});