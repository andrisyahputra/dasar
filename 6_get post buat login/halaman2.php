<?php 
    //cek apakah tidak ada data dibawaknya
    if(!isset($_GET["nama"]) || 
        !isset($_GET["alamat"]) || 
        !isset($_GET["email"]) || 
        !isset($_GET["gambar"]) ) {
        //redirect atau diarahkan
        header("Location: halaman1.php");
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Detail</title>
</head>
<body>
    <ul>
        <li>
            <img src="<?= $_GET["gambar"] ?>" width="250" height="176">
        </li>
        <li>Nama : <?= $_GET["nama"] ?></li>
        <li>Alamat : <?= $_GET["nowa"] ?></li>
        <li>No wa : <?= $_GET["alamat"] ?></li>
        <li>email : <?= $_GET["email"] ?></li>
    </ul>

    <a href="halaman1.php">Kembali halaman 1</a>
</body>
</html>