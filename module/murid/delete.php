<?php 
include '../../lib/database.php';
$id = $_GET['id'];
$hapus=mysqli_query($koneksi,"DELETE FROM data_murid WHERE id='$id'")or die(mysql_error());
if($hapus){
  echo 'Data berhasil dihapus';  
}
?>