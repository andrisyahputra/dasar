<?php
    session_start();
    require 'koneksi.php';

    // cek cokie atau remember me
    if (isset($_COOKIE['id']) && isset($_COOKIE['key'])){
        $id = $_COOKIE['id'];
        $id = $_COOKIE['key'];

        // ambil username di databse berdasarkan id
        $result = mysqli_query($conn, "SELECT username FROM mancity WHERE id = '$id'");
        $row = mysqli_fetch_assoc($result);

        // cek cokie username
        if( $key == hash('sha256', $row['username'])){
            $_SESSION['login'] = true;
        }
    }

    // cek sesion
if(isset($_SESSION["login"])){
    header("Location: index.php");
    exit;
}

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

                // cek remember me satu menit
                if(isset($_POST["rememberme"])){
                    // buat cookie
                    // setcookie("rememberme", "true", time()+60);
                    setcookie('id', $row['id'], time() + 60);
                    setcookie('key', hash('sha256', $row['username']), time()+60);
                }

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
        .display {
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
                <input type="text" name="username" class="display">
            </label>
        </li>
        <li>
            <label>
            Password
                <input type="password" name="password" class="display">
            </label>
        </li>
        <li>
            <label>
                Remember Me
                <input type="checkbox" name="rememberme">
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