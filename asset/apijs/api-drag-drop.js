/**
 * @author Novan
 */
(function(){
	var msg={a:{},b:{}};
	$.fn.ad=function(msg){
	var dropbox= document.getElementById('drop'),
		isGambar,
		isExcel,
		uri;
		
		dropbox.ondragover= dropbox.ondragenter= function(e){
			e.stopPropagation();
			e.preventDefault();
		};
		dropbox.ondrop= function(e){			
			e.stopPropagation();
			e.preventDefault();
			
			var arrFile=e.dataTransfer.files;
			
			for(i=0;i < arrFile.length;i++){
				kirimFile(arrFile[i],uri);				
			};			
		};
		
	}	
	function kirimFile(file,uri){				
		var xhtml=new XMLHttpRequest();		
		var fdata=new FormData();	
	
		fdata.append("gambar",file);			
		xhtml.open("POST",uri);								
		xhtml.send(fdata);		
					
		xhtml.onreadystatechange = function(){
			if(xhtml.readyState==4 && xhtml.status==200){				
				alert(xhtml.responseText);			
			}
		};
	}
	
	function isExcel(){
		fdata.append("excelRead",file);			
		xhtml.open("POST",uri);								
		xhtml.send(fdata);		
					
		xhtml.onreadystatechange = function(){
			if(xhtml.readyState==4 && xhtml.status==200){				
				alert(xhtml.responseText);			
			}
		};
	}
	
})(jQuery);
