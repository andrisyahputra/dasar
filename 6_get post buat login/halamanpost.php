<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Post</title>
</head>
<body>
    <?php if(isset($_POST["submit"])) : ?>
    <h1>Selamat Datang <?= $_POST["nama"] ?></h1>
    <?php endif; ?>
    <!-- <form method="post" action="menupost.php"> -->
    <form method="post" action=""> <!-- dikirim di halaman ini -->
        <label>
            Masukan Nama Pangilan :
            <input type="text" name="nama">
        </label>
        <button type="submit" name="submit">Login</button>
    </form>
</body>
</html>