<?php 
    function datang($waktu = "Pagi", $nama = "Andri Syahputra") {
        return "Selamat $waktu, $nama.!";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <!-- <h1>Selamat Datang, Andri Syahputra!</h1> -->
    <h1><?= datang("siang"); ?></h1>
</body>
</html>