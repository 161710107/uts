<?php 
include('koneksi.php');
$id =$_GET['id'];
$delete = " DELETE FROM pengujis WHERE id='$id'";
mysqli_query($koneksi,$delete);
header("location:lihatdatapenguji.php");
?>