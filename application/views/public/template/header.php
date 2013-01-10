<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $title;?></title>
<meta charset="utf-8">
<!--<meta  http-equiv="refresh" content="60" />!-->
<?php $this->load->view('public/template/meta'); ?>
<link rel="stylesheet" href="<?php echo base_url();?>asset/public/css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="<?php echo base_url();?>asset/public/css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="<?php echo base_url();?>asset/public/css/style.css" type="text/css" media="all">
<link rel="stylesheet" href="<?php echo base_url();?>asset/admin/css/tombol.css" type="text/css" media="all">
<?php $this->load->view('public/template/head_js');?>
</head>
<body>
<div class="body1">
	<div class="main">
		<center><div id="status"></div></center>
<!-- header -->
		<header>
			<div class="wrapper">
				<nav>
					<ul id="menu" class="menuAjax">
						<li><a href="<?php echo base_url();?>">Home</a></li>
						<li><a href="<?php echo base_url();?>index.php/galeri">Galeri foto</a></li>
						<li><a href="<?php echo base_url();?>index.php/tentang">Tentang</a></li>
						<li class="end"><a href="<?php echo base_url();?>index.php/logintrue287726jdkjsi84kfh48fwijf84ijf3494423xxpqWf">login</a></li>
					</ul>
				</nav>				
			</div>
			
		</header>
<!-- / header -->
	</div>
</div>
<div class="body2">
	<div class="main">
		<section id="content">
			<div class="banner" style="height: 100px"></div>
			<div class="box1">
				<div class="wrapper">
					<article class="col1">						
						
							    <div class="pad_left1">
							            <h2 class="pad_bot1"><?php echo $head; ?></h2><br />
							    </div>
