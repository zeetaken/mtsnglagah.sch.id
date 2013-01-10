/**
 * @author Novan
 */
$(function(){		
		
		var fontsize=12,
			identitas=$('#idpeserta').serialize(),
			jmlsoal=0,
			nomor=0,
			msg='a';
		
		$.post(
				'ujian/ujian/data_soal',
				{mintasoal:identitas},
				function(data){					
					msg=data;										
					show_data();
				},'json'
			);
					

		function show_data(){
			if(jmlsoal < msg.soal.length && jmlsoal>=0)
			{				
				nomor=jmlsoal+1;				
			}
			else
			if(jmlsoal<=0){
				jmlsoal=msg.soal.length - 1;
				nomor=jmlsoal+1;				
			}
			else
			{
				jmlsoal=0;
				nomor=jmlsoal+1;				
			}			
			$('#halaman').append(nomor+' / '+msg.soal.length);
			$("#soal").html(msg.soal[jmlsoal].tanya).fadeIn(1000);
			$("#pil-a")
			.html("<input type='radio' onclick='setpil(this.value)' name=pil"+msg.soal[jmlsoal].soalid+" value='A' /><p> A. </p>"+msg.soal[jmlsoal].pila+"<br />");
			$("#pil-b")
			.html("<input type='radio' onclick='setpil(this.value)' name=pil"+msg.soal[jmlsoal].soalid+" value='B' /><p> B. </p>"+msg.soal[jmlsoal].pilb+"<br />");
			$("#pil-c")
			.html("<input type='radio' onclick='setpil(this.value)' name=pil"+msg.soal[jmlsoal].soalid+" value='C' /><p> C. </p>"+msg.soal[jmlsoal].pilc+"<br />");
			$("#pil-d")
			.html("<input type='radio' onclick='setpil(this.value)' name=pil"+msg.soal[jmlsoal].soalid+" value='D' /><p> D. </p>"+msg.soal[jmlsoal].pild+"<br />");
			$('#pilihan-jwb').slideDown(1000);
		} 

		
		function setpil(nil){
			
		}
		
		
		$('#save').click(function(){
			var id=$('#idpeserta').serialize();
			alert('ok');						
			$.post('ujian/ujian/data_peserta',{kirim:id},
			function(d){
				alert(d.no_daftar);
			}			
			,'json');
			$('#identitas :input').attr('disabled','true');					
			e.preventDefault();
		});		


		//efek mulai di sini		
		$('#zoom-in').click(function(e){
			e.preventDefault();			
			$('#soal p,#pilihan-jwb p').css('font-size',fontsize+=1);
			$('#soal p,#pilihan-jwb p').css('font-size',fontsize+=1);			
		});
		$('#zoom-out').click(function(e){			
			$('#soal p,#pilihan-jwb p').css('font-size',fontsize-=1);
			$('#soal p,#pilihan-jwb p').css('font-size',fontsize-=1);
			e.preventDefault();			
		});
		
		
		//next - prev soal
		$('#prev').click(function(e){
			jmlsoal--;
			$('#soal').hide();
			$('#pilihan-jwb').hide();
			$('#halaman').empty();			
			show_data();
			e.preventDefault;			
		});
		$('#next').click(function(){
			jmlsoal++;
			$('#soal').hide();
			$('#pilihan-jwb').hide();
			$('#halaman').empty();			
			show_data();			
			e.preventDefault;			
		});
		$('#first-navi').click(function(e){
			jmlsoal=0;
			$('#soal').hide();
			$('#pilihan-jwb').hide();
			$('#halaman').empty();			
			show_data();
			e.preventDefault;			
		});
		$('#last-navi').click(function(){
			jmlsoal=msg.soal.length - 1;			
			$('#soal').hide();
			$('#pilihan-jwb').hide();
			$('#halaman').empty();			
			show_data();			
			e.preventDefault;			
		});
		// end next
		
	});
