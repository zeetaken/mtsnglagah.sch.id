/**
 * @author Novan
 */
$(function(){
	var trg=$(".hasil"),
		msg=$(".msg"),
		uri="psb/psb_control/cari_siswa";

	$(".cari-siswa").change(function(){
		var cari=$(this).val();			
		
		$.ajax({
			url:uri,
			data:cari,
			type:"POST"		
			
		}).done(function(e){
			
			trg.html(e);
				
		});			
	});
	
	$(".cari-siswa").blur(function(){
		$(this).css("width","250px").delay(1500);
	});	
	
	
})(jQuery);
