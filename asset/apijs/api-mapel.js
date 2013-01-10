/**
 * @author Novan
 */
$(function(){
	loadMapel();// method load master mata pelajaran
		loadMapelAktif();
		$('#menu_mapel').bind('click',function(e){
			$('#inp_vid,#in_jadwal').slideUp(1000);			
			$('#in_mapel').slideDown(1000);					
			e.preventDefault();			
		});		
		
		// ambil data master mapel
		function loadMapel(){
			$.post('<?=base_url();?>index.php/admin/admin_ujian/list_mapel',{master:'a'},function(x){				
				
				for(var i=0; i <x.master.length; i++){
					$('#master_mapel')				
					.append('<li id="mapelist'+i+'" class="tombol white" title="seret saya ke mapel aktif">'+x.master[i]+'</li>');
					$('#mapelist'+i).draggable({						
						revert:'invalid'
					});
				}
			},'json');
		}
		function loadMapelAktif(){
			$.post('<?=base_url();?>index.php/admin/admin_ujian/list_mapel',{aktif:'b'},function(x){	
							
				for(var i=0; i <x.aktif.length; i++){
					$('<li>'+x.aktif[i]+'</li>')
					.appendTo('#sort_mapelist')
					.addClass('medium')
					.addClass('white')
					.draggable({
						revert:'invalid'			
					});
				}
			},'json');
		}
					
		$('#sort_mapelist').droppable({			
			accept: "#master_mapel > li" ,
			drop: function( event,ui ){				
				$( "<li></li>" )
				.text( ui.draggable.text() )
				.appendTo( this )
				.end()
				.addClass('medium')
				.addClass('white')				
				.draggable({
					revert:'invalid'			
				});
				$(ui.draggable).fadeOut();
				
				$.post(uriMapel,{single:ui.draggable.text()},function(e){
					
				});
			}						
		});
		
		$('#del_mapelist').droppable({
			accept:'#sort_mapelist > li',
			drop: function(e,ui){				
				var map=$(ui.draggable).text();
				$(ui.draggable).fadeOut();				
				$.post(uriMapel,{del:map},function(e){
					
				});
			}
		});		
		
		// handler input manual
		$('#inmapel').click(function(){
			var d=$('#mapel_manual').val();			
			$.post(uriMapel,{singlemaster:d},function(a){				
				$('#mapel_manual').attr('value','');
				$('#master_mapel').empty();
				loadMapel();
			});
			e.preventDefalut();
		});
})(jQuery);
