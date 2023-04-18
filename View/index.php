<?php
require ("../Controller/koneksi.php");
$pengaduan = query("SELECT * FROM pengaduan_masyarakat"); ?>

<!-- MVC atau Model View Controller adalah sebuah pola desain arsitektur dalam sistem pengembangan website yang terdiri dari tiga bagian, yaitu: 1. Model, bagian yang mengelola dan berhubungan langsung dengan database; 2. View, bagian yang akan menyajikan tampilan informasi kepada pengguna; dan 3. Controller, bagian yang menghubungkan model dan view dalam setiap proses request dari user. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemrograman CRUD</title>
</head>
<body>
    <h1>Aplikasi Pengaduan Masyarakat</h1>
    <br>
    <a href="../Model/form_tambah.php">Tambah Data</a>
    <table>
        <tr>
            <th>No.</th>
            <th>Nama Pengadu</th>
            <th>Tempat Tinggal</th>
            <th>Media</th>
            <th>Pengaduan</th>
            <th>Tindak Lanjut</th>
            <th>Opsi</th>
        </tr>
        <?php $number = 1;?>
        <?php foreach ($pengaduan as $u) : ?>
        <tr>
            <td align="center"><?=$number;?></td>
            <td><?= $u['nama_pengadu'];?></td>
            <td><?= $u['tempat_tinggal'];?></td>
            <td><?= $u['media'];?></td>
            <td><?= $u['pengaduan'];?></td>
            <td><?= $u['tindak_lanjut'];?></td>
            <td>
                <a href="../Model/form_edit.php?id=<?=$u['id'];?>">Edit</a>
                <a href="../Controller/proses_hapus.php?id=<?=$u['id'];?>" onclick="return confirm('Apakah anda yakin ingin menghapus data ini')">Hapus</a>
            </td>
        </tr>
        <?php $number++;?>
        <?php endforeach;?>
    </table>
</body>
</html>