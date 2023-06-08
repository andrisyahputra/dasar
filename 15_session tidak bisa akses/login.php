<?php
    session_start();
if(isset($_SESSION["login"])){
    header("Location: index.php");
    exit;
}
require 'koneksi.php';

    if (isset($_POST["submit"])){
        // tampung
        $username = $_POST["username"];
        $password = $_POST["password"];

        // dari databse
        $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

        // cek username
        if (mysqli_num_rows($result) === 1){

            // cek password
            $row = mysqli_fetch_assoc($result);
            // kembalikan hash dari semula
            if (password_verify($password, $row["password"])){
                // set session
                $_SESSION['login'] = true;
                header("Location: index.php");
                exit;
            }
        }

        $error = true;
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <style>
        input {
            display: block;
        }
        li {
            list-style-type: none;
        }
    </style>
</head>
<body>
    <?php if(isset($error)) :?>
        <p style="color: red; font-style: italic;">Password dan username salah</p>
    <?php endif; ?>
    <h1>Login</h1>
    <form method="post" action="" enctype="multipart/form-data">
    <ul>
        <li>
            <label>
            Username
                <input type="text" name="username">
            </label>
        </li>
        <li>
            <label>
            Password
                <input type="password" name="password">
            </label>
        </li>
        <li>
            <button type="submit" name="submit">Login</button>
        </li>
        <li>
        <a href="registrasi.php">Daftar</a>
        </li>
    </ul>
    </form>
</body>
</html>