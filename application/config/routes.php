<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


$route['default_controller'] = "mts";
$route['galeri'] = "mts/galeri";
$route['tentang'] = "mts/tentang";
$route['404_override'] = '';
$route['logintrue287726jdkjsi84kfh48fwijf84ijf3494423xxpqWf'] = "mts/login_form";

/**route admin
 *
**/ 
// berita
$route['wp-admin']="admin/admin_control";
$route['wp-admin/posting']="admin/admin_control/menu_post";
$route['wp-admin/edit-berita']="admin/admin_control/edit_news";

//psb
$route['wp-admin/lihat-daftar-siswa']="admin/admin_psb/menu_show_siswa";
$route['wp-admin/grafik-psb']="admin/admin_psb/grafik_psb_admin";
$route['wp-admin/konfig-psb']="admin/admin_psb/konfigurasi_psb";



// ujian
$route['wp-admin/ujian']="admin/admin_ujian/index";
$route['wp-admin/edit-soal']="admin/admin_ujian/edit_soal";
$route['wp-admin/lolos-seleksi']="admin/admin_ujian/siswa_lolos";
$route['wp-admin/pembagian-kelas']="admin/admin_ujian/pembagian_kelas";
$route['wp-admin/konfig-ujian']="admin/admin_ujian/menu_config";

//system
$route['wp-admin/konfigurasi-sitem']="admin/setting/form_add";
$route['wp-admin/media']="admin/setting/media";


/**
$route['wp-admin']="admin/admin_control";
$route['wp-admin']="admin/admin_control";
$route['wp-admin']="admin/admin_control";
*/
// route psb
$route['pendaftaran'] = "psb/psb_control/form_pendaftaran";
$route['list_siswa'] = "psb/psb_control/show_all_siswa";
$route['cara_daftar'] = "psb/psb_control/cara_daftar";
//$route['pengumuman_psb'] = "psb/psb_control/pengumuman";
$route['grafik_psb'] = "psb/psb_control/grafik";
$route['tutorial_psb'] = "psb/psb_control/tutor";

//route ujian
$route['soal_ujian'] = "ujian/ujian/terbit_soal";
$route['cara_ujian'] = "ujian/ujian/cara";
$route['pengumuman_ujian'] = "ujian/ujian/pengumuman";
$route['tutorial_ujian'] = "ujian/ujian/tutorial";

/* End of file routes.php */
/* Location: ./application/config/routes.php */