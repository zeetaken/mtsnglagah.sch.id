<script type="text/javascript" src="<?php echo base_url()?>asset/public/js/validasi.js"></script>
<?php
$level=array(
''=>'--Pilih Level Pengguna--',
'super_user'=>'Administrator',
'admin_psb'=>'Admin PSB',
'admin_ujian'=> 'Admin Ujian'
);

echo validation_errors();
echo form_open('admin/setting/add_akun');
echo form_label('Nama Pengguna') .'<br>'. form_input(array('name'=>'user','class'=>'inp-form')).'<br>';
echo form_label('E-mail') .'<br>'. form_input(array('name'=>'email','class'=>'inp-form')).'<br>';
echo form_label('Kata Sandi') .'<br>'. form_password(array('name'=>'sandi','class'=>'inp-form')).'<br>';
echo form_label('Konfirmasi Sandi') .'<br>'. form_password(array('name'=>'csandi','class'=>'inp-form')).'<br>';
echo form_label('Level Pengguna') .'<br>'. 
form_dropdown('level',$level)."<br><br>";
echo form_submit(array('name'=>'add','class'=>'submit','value'=>'Tambahkan'));
echo form_close();