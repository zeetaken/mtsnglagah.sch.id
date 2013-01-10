/**
 * @author Novan
(function(){
	var
	opt={		
		url:{},
		isi:{}
		};	
	$.fn.template=function(opt){
		url:url(),
		isi=isi()
	};
	
	function url(){
		
	}
	
	function isi(){
		$("#content").innerHtml=
	}
})(jQuery);
**/
$(function(){
	$(".menuAjax li a").click(function(){
		var url=$(this).attr("href");
		$.post(url,{data:url},function(e){
			$(".isi").html(e);
		});		
		
		e.preventDefault();
	});
});
