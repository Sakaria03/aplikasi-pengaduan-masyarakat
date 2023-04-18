<?php 
require "../Controller/koneksi.php";
$pengaduan = query("SELECT * FROM pengaduan_masyarakat"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemograman CRUD</title>
</head>
<body>
    <h1>Mengedit data pengaduan Masyarakat</h1>
    <br>
    <a href="../View/index.php" class="back-button">Lihat semua data</a>
    <form action="../Controller/proses_edit.php" method="post">
        <?php foreach ($pengaduan as $u) : ?>
        <table>
            <tr>
                <td>Nama Pengadu</td>
                <td><input type="text" name="nama_pengadu" value="<?= $u['nama_pengadu'];?>" required></td>
            </tr>
            <tr>
                <td>Tempat Tinggal</td>
                <td><input type="text" name="tempat_tinggal" value="<?= $u['tempat_tinggal'];?>" required></td>
            </tr>
            <tr>
                <td>Media</td>
                <td><input type="text" name="media" value="<?= $u['media'];?>" required></td>
            </tr>
            <tr>
                <td>Pengaduan</td>
                <td><input type="text" name="pengaduan" value="<?= $u['pengaduan'];?>" required></td>
            </tr>
            <tr>
                <td>Tindak Lanjut</td>
                <td><input type="text" name="tindak_lanjut" value="<?= $u['tindak_lanjut'];?>" required></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="save data"></td>
            </tr>
        </table>
        <?php endforeach;?>
    </form>
</body>
</html>