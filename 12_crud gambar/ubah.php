<?php
    // koneksi databse
    require 'koneksi.php';

    // tangkap id
    $id = $_GET["id"];

    $mancity = query("SELECT * FROM mancity WHERE id = $id");
    // var_dump($mancity);



    // cek tombol sumbmit sudah ditekan atau belum
    if (isset($_POST["submit"])){
        if (ubah($_POST) > 0){
            echo "<script>
                alert('Berhasil diubah');
                document.location.href = 'index.php';
            </script>";
        } else {
            echo "<script>
            alert('Gagal diubah');
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
    <title>Tambah Mahasiswa</title>
</head>

<body>
    <h1>Ubah Data Mahasiswa</h1>

    <form method="post" action="" enctype="multipart/form-data">
        <table border="0" cellpadding="10" cellspacing="0">
            <?php foreach($mancity as $city) : ?>
                <input type="hidden" name="id" value="<?= $city["id"] ?>">
                <input type="hidden" name="gambarlama" value="<?= $city["gambar"] ?>">


            <tr>
                <td><label for="nama">Nama Lengkap</label></td>
                <td>:</td>
                <td><input type="text" name="nama" id="nama" value="<?= $city["nama"] ?>" required></td>
            </tr>
            <tr>
                <td><label for="posisi">Posisi</label></td>
                <td>:</td>
                <td><input type="text" name="posisi" id="posisi" value="<?= $city["posisi"] ?>" required></td>
            </tr>
            <tr>
                <td><label for="asal">Asal</label></td>
                <td>:</td>
                <td><input type="text" name="asal" id="asal" value="<?= $city["asal"] ?>" required></td>
            </tr>
            <tr>
                <td><label for="no_punggung">Nomor Punggung</label></td>
                <td>:</td>
                <td><input type="text" name="no_punggung" id="no_punggung" value="<?= $city["no_punggung"] ?>" required></td>
            </tr>
            <tr>
                <td><label for="gambar">Gambar</label></td>
                <td>:</td>
                <td>
                    <img src="gambar/<?= $city["gambar"] ?>" alt="<?= $city["gambar"] ?>" width="250" height="176">
                </td>
                <td><input type="file" name="gambar" id="gambar" value="<?= $city["gambar"] ?>"></td>
            </tr>
            <?php endforeach; ?>
            <tr>
                <td colspan="2">
                    <button type="submit" name="submit">Ubah Data Pemain</button>
                </td>
                <td>
                    <a href="index.php">Kembali</a>
            </td>
                
            </tr>

        </table>
    </form>
</body>

</html>