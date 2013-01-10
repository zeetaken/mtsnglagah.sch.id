<script type="text/javascript" src="<?php echo base_url();?>asset/public/js/jwplayer.js"></script>

<div align="center" style="border: solid 1px #f2f2f2; margin: 5px; padding: 15px;">
	<video src="<?php echo base_url().$lokasi;?>" height="320px" width="480px" id="video">
		
	</video>
	<script type="text/javascript">
	jwplayer('video').setup({
		flashplayer: "<?php echo base_url();?>asset/public/js/player.swf",
		skin:'<?php echo base_url();?>asset/public/js/jwskin/skewd.zip'				
	});  
	</script>
</div>
		
