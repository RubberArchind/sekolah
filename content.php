<?php
$module = empty($_GET['module']) ? 'home' : $_GET['module'];

switch($module) {
    case 'home':
        include "home.php";
        break;
    case 'data_siswa':
        include "module/murid/index.php";
        break;
    case 'pegawai':
        include "modules/pegawai/index.php";
        break;
    case 'transaksi':
        include "modules/transaksi/index.php";
        break;
    case 'pelanggan':
        include "modules/pelanggan/index.php";
        break;
    default:
        include 'index.php';
}
?>