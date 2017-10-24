<?php
include ('koneksi.php');
$id   = $_POST['id'];
$nama = $_POST['nama'];
$nilai_lulus = $_POST['nilai_lulus'];

$edit ="UPDATE jurusans SET nama='$nama' , nilai_lulus='$nilai_lulus' WHERE id='$id'";
mysqli_query($koneksi,$edit);
header("location:lihatdatajurusan.php");
?>