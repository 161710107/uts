<?php
include ('koneksi.php');
$pendaftar = $_POST['nama_pendaftar'];
$jurusan = $_POST['nama_jurusan'];
$nilai_tpa = $_POST['TPA'];
$nilai_wawancara = $_POST['WW'];
$nilai_uan= $_POST['uan'];
$nilai_minat = $_POST['minat'];
$lulus = $_POST['nilai_lulus'];
$rata =$nilai_tpa+$nilai_wawancara+$nilai_uan+$nilai_minat;
$hasil = $rata/4;
if(($hasil >=0) && ($hasil<$lulus)){
	$index="Tidak lulus";
}elseif(($hasil >=$lulus ) && ($hasil<=100)){
	$index="Anda lulus";
}else{
	$index="nilai diluar jangkauan";
}
$penguji = $_POST['nama_penguji'];
$tahun_ajaran= $_POST['ajaran'];

$simpan4 = "INSERT INTO hasils SET pendaftar_id= '$pendaftar', jurusan_id='$jurusan', nilai_tpa='$nilai_tpa', nilai_wawancara='$nilai_wawancara', nilai_uan='$nilai_uan', nilai_minat='$nilai_minat', nilai_rata='$hasil', penguji_id='$penguji', tahun_ajaran='$tahun_ajaran', keterangan='$index'";
mysqli_query($koneksi,$simpan4);
header("location:lihatdatahasil.php");
?>