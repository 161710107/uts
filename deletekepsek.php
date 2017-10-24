<?php 
include('koneksi.php');
$id =$_GET['id'];
$delete = " DELETE FROM kepseks WHERE id='$id'";
mysqli_query($koneksi,$delete);
header("location:lihatdatakepsek.php");
?>