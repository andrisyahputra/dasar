<?php
//ini array index nya diawali 0
// sedangkan array assosiative itu index buatan sendiri
//  agar nama gk berubah
//  diawali index => isinya value
    $mahasiswa = [
        [
            "nama" => "Andri Syahputra",
            "nowa" => "081278391690",
            "alamat" =>"Binjai, Medan, Indonesia", 
            "email" => "andrisyahputra2209@gmail.com",
            "gambar" => "https://source.unsplash.com/random/800×800/?anime=1"
        ],
        [
            // urutan berubah gk masalah
            "nowa" => "081278391690",
            "nama" => "Bagus",
            "alamat" =>"Binjai, Medan, Indonesia", 
            "email" => "bagus@gmail.com",
            "gambar" => "https://source.unsplash.com/random/800×800/?anime=2"
        ]
    ]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>

    <h1>Daftar Mahasiswa</h1>

    <?php foreach($mahasiswa as $siswa) : ?>
    <ul>
        <li>
            <img src="<?= $siswa["gambar"] ?>" alt="<?= $siswa["gambar"] ?>" width="250" height="167">
        </li>
        <li>Nama : <?= $siswa["nama"] ?></li>
        <li>No Wa : <?= $siswa["nowa"] ?></li>
        <li>ALamat : <?= $siswa["alamat"] ?></li>
        <li>Email : <?= $siswa["email"] ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>