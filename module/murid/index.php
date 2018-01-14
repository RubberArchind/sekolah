<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Website</title>
    <!-- Bootstrap core CSS-->
  <link href="../../dashboard/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="../../dashboard/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="../../dashboard/css/sb-admin.css" rel="stylesheet">
  <style>
      table{
          width:100%;
      }      
      th{
          height:50px;
          background-color: #4CAF50;
    color: white;
      }
      .font{
          color:white;
      }
      td{
          border-bottom: 1px solid #ddd;
      }
       tr:hover {background-color: #f5f5f5;}
    </style>
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <?php
       include 'includes/navbar_sidebar.php';
       ?>
    
    <!--Header-->
      <div class="content-wrapper">
    <div class="container-fluid">
 <?php include 'includes/header.php' ?>  
    <!--data-->
    
    <?php
include '../lib/database.php';
echo '<h2 align=center>DATA SISWA</h2>';
$read = mysqli_query($koneksi,"select * from data_murid");
echo '<table align="center" >
<tr>
<th>
<center>Nama Murid </th>
<th><center> Kelas </th>
<th><center> Alamat </th>
<th class=font colspan=2><center><a href=../module/murid/create.php> Tambah </a></th>
</tr>
';
    
while ($data = mysqli_fetch_assoc($read)){
echo '<tr><td><center>'.$data["nama"].'</td>
<td><center>'.$data["kelas"].'</td>
<td><center>'.$data["alamat"].'</td>

<td><center><a href="../module/murid/edit.php?id='.$data["id"].'"name="edit"> Edit</a></td>
<td><center><a href="../module/murid/delete.php?id='.$data["id"].'"name="hapus"> Hapus </a></td>
<tr>';
}
?>
          </div>
    </div>
    
    <?php include 'includes/footer.php'; ?>
      
      
 
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
    <script src="js/sb-admin-charts.min.js"></script>
    </div>
</body>

</html>
