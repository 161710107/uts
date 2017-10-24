<?php 
include('koneksi.php');
$id =$_GET['id'];
$delete = " DELETE FROM hasils WHERE id='$id'";
mysqli_query($koneksi,$delete);
header("location:lihatdatahasil.php");
?>