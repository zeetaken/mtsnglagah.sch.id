<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Login Akun</title>
<link rel="stylesheet" href="<?php echo base_url();?>asset/admin/css/screen.css" type="text/css" media="screen" title="default" />
<!--  jquery core -->
<script src="<?php echo base_url();?>asset/admin/js/jquery/jquery-1.4.1.min.js" type="text/javascript"></script>

<!-- Custom jquery scripts -->
<script src="<?php echo base_url();?>asset/admin/js/jquery/custom_jquery.js" type="text/javascript"></script>

<!-- MUST BE THE LAST SCRIPT IN <HEAD></HEAD></HEAD> png fix -->
<script src="<?php echo base_url();?>asset/admin/js/jquery/jquery.pngFix.pack.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function(){
$(document).pngFix( );
});
</script>
</head>
<body id="login-bg"> 
 
<!-- Start: login-holder -->
<div id="login-holder">

	<!-- start logo -->
	<div id="logo-login">
		<a href="<?php echo base_url();?>">Kembali ke halaman Depan</a>
	</div>
	<!-- end logo -->
	
	<div class="clear"></div>
	
	<!--  start loginbox ................................................................................. -->
	<div id="loginbox">
	
	<!--  start login-inner -->
	<div id="login-inner">
		<form action="mts/login_handler" method="post">
		<table border="0" cellpadding="0" cellspacing="0">
		<tr>
			<th>Nama User</th>
			<td><input type="text" name="nama" class="login-inp" /></td>
		</tr>
		<tr>
			<th>Kata Sandi</th>
			<td><input type="password" name="sandi" value="************"  onfocus="this.value=''" class="login-inp" /></td>
		</tr>
		<tr>
			<th></th>
			<td valign="top"><input type="checkbox" class="checkbox-size" id="login-check" /><label for="login-check">Ingat Saya</label></td>
		</tr>
		<tr>
			<th></th>
			<td><input type="submit" class="submit-login"  /></td>
		</tr>
		</table>
		</form>
	</div>
 	<!--  end login-inner -->
	<div class="clear"></div>
	<a href="" class="forgot-pwd">Lupa Sandi?</a>
 </div>
 <!--  end loginbox -->
 
	<!--  start forgotbox ................................................................................... -->
	<div id="forgotbox">
		<div id="forgotbox-text">Masukkan e-mail Anda, Kami akan mereset password anda.</div>
		<!--  start forgot-inner -->
		<div id="forgot-inner">
		<table border="0" cellpadding="0" cellspacing="0">
		<tr>
			<th>Alamat E-mail:</th>
			<td><input type="text" value=""   class="login-inp" /></td>
		</tr>
		<tr>
			<th> </th>
			<td><input type="button" class="submit-login"  /></td>
		</tr>
		</table>
		</div>
		<!--  end forgot-inner -->
		<div class="clear"></div>
		<a href="" class="back-login">Kembali ke login</a>
	</div>
	<!--  end forgotbox -->

</div>
<!-- End: login-holder -->
</body>
</html>