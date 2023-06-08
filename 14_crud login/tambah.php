<?php
    // koneksi databse
    require 'koneksi.php';

    // cek tombol sumbmit sudah ditekan atau belum
    if (isset($_POST["submit"])){

        // var_dump($_POST);
        // var_dump($_FILES);
        // die;
        

        
        // cek berhasil dikirim 1 atau tidak 0
        // var_dump(mysqli_affected_rows($conn));
        // if (mysqli_affected_rows($conn) > 0){
        //     echo "Berhasil";
        // } else {
        //     echo "Gagal";
        //     echo "<br>";
        //     echo mysqli_error($conn); // mengtahui pesan eror
        // }

        // cek apakah data ada atau tidak
        if (tambah($_POST) > 0){
            echo "<script>
                alert('Berhasil ditambah');
                document.location.href = 'index.php';
            </script>";
        } else {
            echo "<script>
                alert('Gagal ditambah');
                document.location.href = 'index.php';
            </script>";
        }

    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pemain</title>
</head>

<body>
    <h1>Tambah Data Pemain</h1>

    <form method="post" action="" enctype="multipart/form-data">
        <table border="0" cellpadding="10" cellspacing="0">
            <tr>
                <td><label for="nama">Nama Lengkap</label></td>
                <td>:</td>
                <td><input type="text" name="nama" id="nama" required></td>
            </tr>
            <tr>
                <td><label for="posisi">Posisi</label></td>
                <td>:</td>
                <td><input type="text" name="posisi" id="posisi" required></td>
            </tr>
            <tr>
                <td><label for="asal">Asal</label></td>
                <td>:</td>
                <td><input type="text" name="asal" id="asal" required></td>
            </tr>
            <tr>
                <td><label for="no_punggung">Nomor Punggung</label></td>
                <td>:</td>
                <td><input type="text" name="no_punggung" id="no_punggung" required></td>
            </tr>
            <tr>
                <td><label for="gambar">Gambar</label></td>
                <td>:</td>
                <td><input type="file" name="gambar" id="gambar" required></td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit" name="submit">Tambah Data Pemain</button>
                </td>
            </tr>

        </table>
    </form>
</body>

</html>