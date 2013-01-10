/**
 * @author Novan
 */
// simpel validasi input ----------mulai--------------
$(function(){
	
	var psnNo="HARUS DI ISI DENGAN ANGKA!",
		psnVar="",
		psnEmail="EMAIL HARUS VALID";		
		
		$("#angka").blur(function(){
			if($(this).attr("value").match("[a-zA-Z]")){
				$(this).after("<span class=t-tip error> >>"+psnNo+"</span>");					
			}
		});
	
		$(':input').blur(function(){
			if($(this).val()==false){
				$(this)
				.addClass('txt-eror')
				.after('<span class="t-tip error"> >> Kolom ini harus di isi...</span>');
			}
			
		});
		
		$(':input').focus(function(){
			$(this).removeClass('txt-eror').next('span').remove();
		});
	
	
	
})(jQuery);

// simpel validasi input ----------berakhir--------------