<script type="text/javascript" src="<?php echo base_url()?>asset/public/js/validasi.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>asset/apijs/api-drag-drop.js"></script>
<script>
	$(function(){
		$(".submit").click(function(){
		$(this).ad({			
			b:wow()
		});
		return false;
		});
		
		function wow(){
			alert($(this.html));
		}
	});
</script>
<?php $this->load->view('admin/util/tny_mce');?>
<div>
<?php
echo validation_errors();
echo form_open('admin/admin_control/tmb_brita');
	echo form_label('Judul')."<br>";
	echo form_input(array('name'=>'jud','class'=>'inp-form'))."<br><br>";
	
	echo form_textarea(array('cols'=>'75', 'rows'=>'10', 'name'=>'isi'))."<br>";
	echo form_label('kategori')."<br>";
	echo form_input(array('name'=>'kat','class'=>'inp-form'))."<br><br>";
	echo form_submit(array('name'=>'terbit','class'=>'submit','value'=>'Terbitkan'));
echo form_close();
?>
</div>
