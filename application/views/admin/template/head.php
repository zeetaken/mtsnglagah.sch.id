<?php $this->auth->cek_auth();?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php echo $title;?></title>
<link rel="stylesheet" href="<?php echo base_url();?>asset/admin/css/screen.css" type="text/css" media="all" />
<!-- tombol -->
<link rel="stylesheet" href="<?php echo base_url();?>asset/admin/css/tombol.css" type="text/css" media="all" />
<link rel="stylesheet" href="<?php echo base_url();?>asset/admin/css/drop.css" type="text/css" media="all" />
<link rel="stylesheet" href="<?php echo base_url();?>asset/public/css/select.css" type="text/css" media="all" />

<?php $this->load->view('public/template/head_js');?>

</head>
<body> 
<!-- Start: page-top-outer -->
<div id="page-top-outer">    

<!-- Start: page-top -->
<div id="page-top">
	 	 	
	<?php $this->load->view('admin/util/menu_jq'); ?>
	<div class="logo">
		
	</div>
	
</div>
<!-- End: page-top -->

</div>
<!-- End: page-top-outer -->
	
<div class="clear">&nbsp;</div>
 
		<?php $this->load->view($menu); ?>

<div class="clear"></div>
  
<!-- start content-outer ........................................................................................................................START -->
<div id="content-outer">
<!-- start content -->
<div id="content">
	<div style="margin-left: 10px">
	<!--  start page-heading -->
	<div id="page-heading">
		<h1><?php echo $head;?></h1>
	</div>
	<!-- end page-heading -->

	
