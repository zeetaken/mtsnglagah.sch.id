/**
 * @author Novan
 */
$(function(){	
		
		var url='mts/display_grafik',			
			indexThn=0;
			
		var background = {
            type: 'linearGradient',
            x0: 0,
            y0: 0,
            x1: 0,
            y1: 1,
            colorStops: [{ offset: 0, color: '#fefefe' },
                         { offset: 1, color: '#f2f2f2'}]
        };

        var fillStyle = {
            type: 'linearGradient',
            x0: 0,
            y0: 0,
            x1: 1,
            y1: 0,
            colorStops: [{ offset: 0, color: '#65c2e8' },
                             { offset: 0.49, color: '#55b3e1' },
                             { offset: 0.5, color: '#3ba6dc' },
                             { offset: 1, color: '#2794d4'}]
        };
	
		
		$.post(url, {send:'psb'},function(data){			
			
			$('#jqChart').jqChart({
			 
			title:{text:"Grafik penerimaan Calon siswa baru"	},			
			border: { strokeStyle: '#f0f0f0' },
			background:background,	
			axes: [
                        {
                            location: 'left',
                            minimum: 0,
                            maximum: data.grafik[indexThn].jml+20,
                            
                        }
                      ],
				legend: { location: "bottom", visible: true, title :"Jumlah Siswa (pendaftar)" },
				
				series : 
						[
                            {
                            	title:"Data Pendaftar",
								type: "column",
                                data: getData(data),
                                fillStyle: fillStyle
                            },
                            {
                            	title:"Data Pendaftar",
								type: "line",
                                data: getData(data),
                                labels: { fillStyle: '#65c2e8', font: '11px sans-serif' }

                            }
                        ]
		});
			
			
		},'json');
		function getData(data){
			var d = [];

            for (var indexThn = 0; indexThn < data.grafik.length; indexThn++) {            	
                d.push([data.grafik[indexThn].thnawl+" - "+data.grafik[indexThn].thnakhr, data.grafik[indexThn].jml]);
            }

            return d;

		}		
		
		// simpan sbg gambar
		$('#button').click(function () {
                var dataURL = $('#jqChart').jqChart('todataurl', 'image/png');
                document.getElementById("canvasImg").src = dataURL;
            });
            

		$('#jqChart').bind('tooltipFormat', function (e, data) {
                return "<b>" + data.series.title + "</b></br>" +
                       "Tahun = " + data.x + "</br>" +
                       "Jumlah Pendaftar = " + data.y + "</br>" 
                       
            });

	});