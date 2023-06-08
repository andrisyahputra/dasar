<?php 
// cek apakah tombol sudah diklik atau belum
if (isset($_POST["submit"])) {
// cek username & password
    if ($_POST["username"] == "andri" && $_POST["password"] == "andri") {
// jika benar, redirect kehalaman admin
        header("Location: admin.php");
        exit;
    }
// jika salah tampilkan kesalahan
    $eror = true;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
</head>
<body>
    <?php if(isset($eror)) : ?>
    <h3 style="color: red; font-style: italic;">Username dan Password anda salah</h3>
    <?php endif; ?>
    <h1>Silakan Login</h1>
    <form method="post" action="">
        <label>
            Username
            <input type="text" name="username">
        </label>
        <label>
            Password
            <input type="password" name="password">
        </label>
        <button type="submit" name="submit">Login</button>
    </form>
</body>
</html>