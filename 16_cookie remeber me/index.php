<?php
session_start();
// // pangil clas koneksi
require 'koneksi.php';

// // cek ada session logi
if(!isset($_SESSION["login"])){
    header("Location: login.php");
    exit;
}

// pangil datanyq
$mancity = query("SELECT * FROM mancity"); 

if(isset($_POST["cari"])){
    $mancity = cari($_POST["keyword"]);
}

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
    <h1>Daftar Pemain</h1>

    <a href="logout.php">Logout</a>
    <br>
    <br>
    <a href="tambah.php">Tambah Data Pemain</a>
    <br>
    <br>
    <form method="post" action="">
        <input type="text" name="keyword" placeholder="cari pemain" autofocus autocomplete="off"> 
        <button type="submit" name="cari">Cari</button>
    </form>
    <br>
    <br>
    
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
            <td>
                <a href="hapus.php?id=<?= $pemain["id"]; ?>" onclick="return confirm('yakin dihapus?')">Hapus</a> | 
                <a href="ubah.php?id=<?= $pemain["id"]; ?>">Ubah</a>
            </td>
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