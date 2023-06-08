<?php
    require 'koneksi.php';

    if (isset($_POST["submit"])){
        if( daftar($_POST) > 0 ){
            echo "
            <script>
                alert('Berhasil Daftar');
            </script>
            ";
        } else {
            echo "
            <script>
                alert('Gagal Daftar');
            </script>
            ";
            echo mysqli_error($conn);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Pendaftaran</title>
    <style>
        input {
            display: block;
        }
    </style>
</head>
<body>
    <h1>Halaman Daftar</h1>
    <form method="post" action="" enctype="multipart/form-data">
        <ul>
            <li>
                <label>
                    Username :
                    <input type="text" name="username">
                </label>
            </li>
            <li>
                <label>
                    Password :
                    <input type="password" name="password">
                </label>
            </li>
            <li>
                <label>
                    Konfirmasi password :
                    <input type="password" name="password2">
                </label>
            </li>
            <li>
                <button type="submit" name="submit">Daftar</button>
            </li>
        </ul>
    </form>
</body>
</html>