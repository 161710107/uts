<?php
include ('koneksi.php');
$nama = $_POST['nama'];
$nilai_lulus = $_POST['nilai_lulus'];

$tmbms = "INSERT INTO jurusans SET nama= '$nama',nilai_lulus='$nilai_lulus'";
mysqli_query($koneksi,$tmbms);
header("location:lihatdatajurusan.php");
?>