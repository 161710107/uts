<?php 
include('koneksi.php');
$id =$_GET['id'];
$delete = " DELETE FROM pendaftars WHERE id='$id'";
mysqli_query($koneksi,$delete);
header("location:lihatdatapendaftar.php");
?>