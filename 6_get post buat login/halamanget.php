<?php 

    $mahasiswa = [
        [
            "nama" => "Andri Syahputra",
            "alamat" => "Binjai, Medan, Indonesia",
            "nowa" => "081278391690",
            "email" => "andrisyahputra2209@gmail.com",
            "gambar" => "https://source.unsplash.com/random/800×800/?anime=1"
        ],
        [
            "nama" => "Bagus Setiawan",
            "alamat" => "Binjai, Medan, Indonesia",
            "nowa" => "081278391690",
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
    <title>GET</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach($mahasiswa as $siswa) : ?>
        <ul>
            <li><a href="halaman2.php?nama=<?= $siswa["nama"] ?>&alamat=<?= $siswa["alamat"] ?>&nowa=<?= $siswa["nowa"] ?>&email=<?= $siswa["email"] ?>&gambar=<?= $siswa["gambar"] ?>"><?= $siswa["nama"] ?></a></li>
        </ul>
    <?php endforeach; ?>
</body>
</html>