<?php
include '../../lib/database.php';
if(isset($_POST["subm"])){
$id = $_POST["id"];
$nama = $_POST["nama"];
$kelas = $_POST["kelas"];
$alamat = $_POST["alamat"];
$update = mysqli_query($koneksi,'update data_murid set nama="'.$nama.'" , kelas="'.$kelas.'", alamat="'.$alamat.'" where id="'.$id.'"');
if($update){
echo "Data Berhasil Disimpan ,<a href='#'>back</a>";
}
else{
echo "Gagal Update <a href='edit.php?id=".$id."'> disini</a>";
}
}
?>