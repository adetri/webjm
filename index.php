<?php
header("location: temp/home.php");
#$post_url = preg_replace('/[^a-z0-9-]+/', '-', trim(strtolower($post_title))); 

//session_start();

//        $module = ($_GET['module'] ? $_GET['module'] : 'klinik');
//        $pathlocation = $titlepage = NULL;

//         if ($module == 'klinik') {
//            $titlepage = 'Setting Klinik';
//            $pathlocation = 'klinik.php';
//        } else if ($module == 'background') {
//            $titlepage = 'Background Site';
//            $pathlocation = 'background.php';
//        }

//    if ($_GET['module'] == 'home') {
#        $page_title = 'beranda';
#        $module_path = '/temp/home.php';
#    } else if ($_GET['module'] == 'antrian-dokter') {
#        $page_title = 'Antrian Pasien';
#        $module_path = 'page/dokter/antrian.php';
#    } else if ($_GET['module'] == 'pemeriksaan-gigi') {
#        $page_title = 'Pemeriksaan Gigi';
#        $module_path = 'page/dokter/pemeriksaan.php';
#    } else if ($_GET['module'] == 'pemeriksaan-medical') {
#        $page_title = 'Pemeriksaan Rekam Medik Pasien';
#        $module_path = 'page/dokter/pemeriksaanMedical.php';
#    } else if ($_GET['module'] == 'pemeriksaan-odontogram') {
#        $page_title = 'Pemeriksaan Odontogram System';
#        $module_path = 'page/dokter/pemeriksaanOdontogram.php';
#    } else if ($_GET['module'] == 'password-dokter') {
#        $page_title = 'Ganti Password';
#        $module_path = 'page/password.php';
#    } else if ($_GET['module'] == 'historycase-dokter') {
#        $page_title = 'History Kasus Diagnosa & Terapi';
#        $module_path = 'page/dokter/historycase.php';
#    } else if ($_GET['module'] == 'dokter-agenda') {
#        $page_title = 'Jadwal Booking Kunjungan Dokter';
#        $module_path = 'page/dokter/agenda.php';
#    }
?>
