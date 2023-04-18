<?php
include "koneksi.php";

$nama_pengadu = $_POST['nama_pengadu'];
$tempat_tinggal = $_POST['tempat_tinggal'];
$media = $_POST['media'];
$pengaduan = $_POST['pengaduan'];
$tindak_lanjut = $_POST['tindak_lanjut'];

mysqli_query($koneksi, "UPDATE pengaduan_masyarakat SET nama_pengadu='$nama_pengadu', tempat_tinggal='$tempat_tinggal', media='$media', pengaduan='$pengaduan', tindak_lanjut='$tindak_lanjut' WHERE id='$id'") or die(mysqli_error());

header("location:../View/index.php");

?>