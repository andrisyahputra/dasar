<?php 

$mahasiswa = [
    [
        "Andri Syahputra","081278391690","Binjai, Medan, Indonesia", "andrisyahputra2209@gmail.com"
    ],
    [
        "Bagus Setiawan","081278391690","Binjai, Medan, Indonesia", "bagus@gmail.com"
    ]
];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail</title>
</head>
<body>
    <h1>Detail Mahasiswa</h1>
    <?php foreach($mahasiswa as $siswa) : ?>
    <ul>
        <li>Nama : <?= $siswa[0] ?></li>
        <li>No Wa : <?= $siswa[1] ?></li>
        <li>Alamat : <?= $siswa[2] ?></li>
        <li>Email : <?= $siswa[3] ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>