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
        
        <?php foreach($mancity as $pemain) : ?>
        <tr>
            <td>1</td>
            <td><a href="#">Hapus</a> | <a href="#">Ubah</a></td>
            <td><?= $pemain["nama"] ?></td>
            <td><?= $pemain["posisi"] ?></td>
            <td><?= $pemain["asal"] ?></td>
            <td><?= $pemain["no_punggung"] ?></td>
            <td>
                <img src="gambar/<?= $pemain["gambar"] ?>" alt="ederson.jpg" width="100" height="100">
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>