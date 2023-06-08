<?php
// pangil clas koneksi
require 'koneksi.php';

// pangil datanyq
$mancity = query("SELECT * FROM mancity"); 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=nmsewm, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Daftar mahasiswa</h1>

    <a href="tambah.php">Tambah Data Mahasiswa</a>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Aksi</th>
            <th>Nama</th>
            <th>Posisi</th>
            <th>Asal</th>
            <th>No Punggung</th>
            <th>Gambar</th>
        </tr>
        
        <?php $nourut = 1; ?>
        <?php foreach($mancity as $pemain) : ?>
        <tr>
            <td><?= $nourut ?></td>
            <td><a href="hapus.php?id=<?= $pemain["id"]; ?>" onclick="return confirm('yakin dihapus?')">Hapus</a> | <a href="#">Ubah</a></td>
            <td><?= $pemain["nama"] ?></td>
            <td><?= $pemain["posisi"] ?></td>
            <td><?= $pemain["asal"] ?></td>
            <td><?= $pemain["no_punggung"] ?></td>
            <td>
                <img src="gambar/<?= $pemain["gambar"] ?>" alt="<?= $pemain["gambar"] ?>" width="100" height="100">
            </td>
        </tr>
        <?php $nourut++ ?>
        <?php endforeach; ?>
    </table>
</body>
</html>