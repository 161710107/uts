<?php
include ('koneksi.php');

$nip = $_POST['nip'];
$nama = $_POST ['nama'];

$tambah ="INSERT INTO kepseks SET nip='$nip' ,nama='$nama'
";
mysqli_query($koneksi,$tambah);
header("location:lihatdatakepsek.php");
?>