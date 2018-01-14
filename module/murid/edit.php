<html>
<head>
</head>
<body>
<?php 
include '../../lib/database.php';
$id = $_GET["id"];
$tampil = mysqli_query($koneksi,"select * from data_murid where id='$id'");
if (mysqli_num_rows($tampil)==0)
{
echo "Data Tidak Ada";
}
else{
$data = mysqli_fetch_assoc($tampil);
}
?>
<form action="./edit_proses.php" method="post">
<table>
<tr><td> Nama Murid </td><td> 
    <input type="hidden" name="id" value="<?php echo $data["id"] ?>">
    <input type="text" name="nama" value="<?php echo $data["nama"]?>" required></td></tr>
<tr><td> Kelas </td><td> <input type="text" name="kelas" value="<?php echo $data["kelas"]?>" required></td></tr>
<tr><td> Alamat </td><td> <input type="text" name="alamat" value="<?php echo $data["alamat"]?>" required></td></tr>
<tr><td> <input type="submit" name="subm" value="Submit">
</html>