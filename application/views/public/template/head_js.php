<script type="text/javascript" src="<?php echo base_url();?>asset/public/js/jquery-1.7.2.js" ></script>
<script type="text/javascript" src="<?php echo base_url();?>asset/public/js/jquery-ui-1.8.22.js" ></script>
<script type="text/javascript" src="<?php echo base_url();?>asset/public/js/cufon-yui.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>asset/public/js/cufon-replace.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>asset/public/js/Molengo_400.font.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>asset/public/js/Expletus_Sans_400.font.js"></script>

<script type="text/javascript" src="<?php echo base_url();?>asset/apijs/jquery-mousewheel.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>asset/public/js/jquery.jqChart.min.js"></script>
 
<!--[if lt IE 9]>
<script type="text/javascript" src="<?php echo base_url();?>asset/public/js/html5.js"></script>
<style type="text/css">
	.bg, .box2 {behavior:url(<?php echo base_url();?>asset/public/js/PIE.htc)}
</style>
<![endif]-->
<!--[if lt IE 7]>
	<div style=' clear: both; text-align:center; position: relative;'>
		<a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode">
		<img src="http://www.theie6countdown.com/images/upgrade.jpg" border="0"  alt="" /></a>
	</div>
<![endif]-->
<!--  styled select box script version 2 --> 
<!--[if IE]>
<link rel="stylesheet" media="all" type="text/css" href="<?php echo base_url();?>asset/admin/css/pro_dropline_ie.css" />
<![endif]-->

<!--  jquery core -->


<!--  checkbox styling script -->
<script src="<?php echo  base_url();?>asset/admin/js/jquery/ui.core.js" type="text/javascript"></script>
<script src="<?php echo  base_url();?>asset/admin/js/jquery/ui.checkbox.js" type="text/javascript"></script>
<script src="<?php echo  base_url();?>asset/admin/js/jquery/jquery.bind.js" type="text/javascript"></script>
<script type="text/javascript">
$(function(){
	$('input').checkBox();
	$('#toggle-all').click(function(){
 	$('#toggle-all').toggleClass('toggle-checked');
	$('#mainform input[type=checkbox]').checkBox('toggle');
	return false;
	});
});
</script>  

<![if !IE 7]>

<!--  styled select box script version 1 -->
<script src="<?php echo  base_url();?>asset/admin/js/jquery/jquery.selectbox-0.5.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function() {
	$('.styledselect').selectbox({ inputClass: "selectbox_styled" });
});
</script>
 

<![endif]>

<!--  styled select box script version 2 --> 
<script src="<?php echo base_url();?>asset/admin/js/jquery/jquery.selectbox-0.5_style_2.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function() {
	$('.styledselect_form_1').selectbox({ inputClass: "styledselect_form_1" });
	$('.styledselect_form_2').selectbox({ inputClass: "styledselect_form_2" });
	
});
</script>

<!--  styled select box script version 3 --> 
<script src="<?php echo base_url();?>asset/admin/js/jquery/jquery.selectbox-0.5_style_2.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function() {
	$('.styledselect_pages').selectbox({ inputClass: "styledselect_pages" });
});
</script>

<!--  styled file upload script --> 
<script src="<?php echo base_url();?>asset/admin/js/jquery/jquery.filestyle.js" type="text/javascript"></script>
<script type="text/javascript" charset="utf-8">
  $(function() {
      $("input.file_1").filestyle({ 
          image: "<?php echo base_url();?>asset/admin/images/forms/choose-file.gif",
          imageheight : 21,
          imagewidth : 78,
          width : 310
      });
  });
</script>

<!-- Custom jquery scripts -->
<script src="<?php echo base_url();?>asset/admin/js/jquery/custom_jquery.js" type="text/javascript"></script>
 
<!-- Tooltips -->
<script src="<?php echo base_url();?>asset/admin/js/jquery/jquery.tooltip.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>asset/admin/js/jquery/jquery.dimensions.js" type="text/javascript"></script>
<script type="text/javascript">
$(function() {
	$('a.info-tooltip ').tooltip({
		track: true,
		delay: 0,
		fixPNG: true, 
		showURL: false,
		showBody: " - ",
		top: -35,
		left: 5
	});
});
</script> 


<!--  date picker script -->
<link rel="stylesheet" href="<?php echo base_url();?>asset/admin/css/datePicker.css" type="text/css" />
<script src="<?php echo base_url();?>asset/admin/js/jquery/date.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>asset/admin/js/jquery/jquery.datePicker.js" type="text/javascript"></script>
<script type="text/javascript" charset="utf-8">
        $(function()
{

// initialise the "Select date" link
$('#date-pick')
	.datePicker(
		// associate the link with a date picker
		{
			createButton:false,
			startDate:'01/01/1985',
			endDate:'31/12/2015'
		}
	).bind(
		// when the link is clicked display the date picker
		'click',
		function()
		{
			updateSelects($(this).dpGetSelected()[0]);
			$(this).dpDisplay();
			return false;
		}
	).bind(
		// when a date is selected update the SELECTs
		'dateSelected',
		function(e, selectedDate, $td, state)
		{
			updateSelects(selectedDate);
		}
	).bind(
		'dpClosed',
		function(e, selected)
		{
			updateSelects(selected[0]);
		}
	);
	
var updateSelects = function (selectedDate)
{
	var selectedDate = new Date(selectedDate);
	$('#d option[value=' + selectedDate.getDate() + ']').attr('selected', 'selected');
	$('#m option[value=' + (selectedDate.getMonth()+1) + ']').attr('selected', 'selected');
	$('#y option[value=' + (selectedDate.getFullYear()) + ']').attr('selected', 'selected');
}
// listen for when the selects are changed and update the picker
$('#d, #m, #y')
	.bind(
		'change',
		function()
		{
			var d = new Date(
						$('#y').val(),
						$('#m').val()-1,
						$('#d').val()
					);
			$('#date-pick').dpSetSelected(d.asString());
		}
	);

// default the position of the selects to today
var today = new Date();
updateSelects(today.getTime());

// and update the datePicker to reflect it...
$('#d').trigger('change');
});
</script>

<!-- MUST BE THE LAST SCRIPT IN <HEAD></HEAD></HEAD> png fix -->
<script src="<?php echo base_url();?>asset/admin/js/jquery/jquery.pngFix.pack.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function(){
$(document).pngFix( );
});
</script>
