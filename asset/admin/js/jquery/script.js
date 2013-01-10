$(function(){
	
	var dropbox = $('#dropbox'),
		message = $('.message', dropbox);
	
	dropbox.filedrop({
		// The name of the $_FILES entry:
		paramname:'pic',
		
		maxfiles: 5,
    	maxfilesize: 200,
		url: 'post_file.php',
		
		uploadFinished:function(i,file,response){
			$.data(file).addClass('done');
			// response is the JSON object that post_file.php returns
		},
		
    	error: function(err, file) {
			switch(err) {
				case 'BrowserNotSupported':
					showMessage('Broser Anda tidak support html5! coba download browser terbaru...');
					break;
				case 'TooManyFiles':
					alert('terlalu banyak file/video (maksimal 5)!');
					break;
				case 'FileTooLarge':
					alert(file.name+' Terlalu besar! Silahkan upload video dengan ukuran maksimal 200 MB!');
					break;
				default:
					break;
			}
		},
		
		// Called before each upload is started
		beforeEach: function(file){
			if(!file.type.match(/^video\//)){
				alert('Hanya video tipe (mp4) yang diperbolehkan!');
				
				// Returning false will cause the
				// file to be rejected
				return false;
			}
		},
		
		uploadStarted:function(i, file, len){
			createVideo(file);
		},
		
		progressUpdated: function(i, file, progress) {
			$.data(file).find('.progress').width(progress);
		}
    	 
	});
	
	var template = '<div class="preview">'+
						'<span class="imageHolder">'+
							'<img />'+
							'<span class="uploaded"></span>'+
						'</span>'+
						'<div class="progressHolder">'+
							'<div class="progress"></div>'+
						'</div>'+
					'</div>'; 
	
	
	function createVideo(file){

		var preview = $(template), 
			video = $('img', preview);
			
		var reader = new FileReader();
		
		video.width = 200;
		video.height = 200;
		
		reader.onload = function(e){
			
			// e.target.result holds the DataURL which
			// can be used as a source of the image:
			
			video.attr('src',e.target.result);
		};
		
		// Reading the file as a DataURL. When finished,
		// this will trigger the onload function above:
		reader.readAsDataURL(file);
		
		message.hide();
		preview.appendTo(dropbox);
		
		// Associating a preview container
		// with the file, using jQuery's $.data():
		
		$.data(file,preview);
	}

	function showMessage(msg){
		message.html(msg);
	}

});