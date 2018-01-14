<?php
include '../../lib/database.php';
if(isset($_POST["in"])){
$nama = $_POST["nama"];
$kelas = $_POST["kelas"];
$alamat = $_POST["alamat"];
$tambah = mysqli_query($koneksi,"insert into data_murid(nama,kelas,alamat) values ('$nama','$kelas','$alamat')");
if ($tambah){
echo "Data berhasil di simpan!";
}
else{
	echo"Data Gagal Disimpan";
}
}
?>