<?php
include "koneksi.php";

$nama_pengadu = $_POST['nama_pengadu'];
$tempat_tinggal = $_POST['tempat_tinggal'];
$media = $_POST['media'];
$pengaduan = $_POST['pengaduan'];
$tindak_lanjut = $_POST['tindak_lanjut'];

mysqli_query($koneksi, "INSERT INTO pengaduan_masyarakat (nama_pengadu, tempat_tinggal, media, pengaduan, tindak_lanjut) VALUES ('$nama_pengadu', '$tempat_tinggal', '$media', '$pengaduan', '$tindak_lanjut')") or die(mysqli_error());

header("location:../View/index.php");

?>