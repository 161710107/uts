<?php 
include('koneksi.php');
$id =$_GET['id'];
$delete = " DELETE FROM jurusans WHERE id='$id'";
mysqli_query($koneksi,$delete);
header("location:lihatdatajurusan.php");
?>