<?php
//untuk mulai
    session_start();
    // hapus nersihkan sesion secara seluruh
    session_destroy();
    $_SESSION = [];
    session_unset();

    // hapus cokkie
    setcookie('id', '', time()-3600);
    setcookie('key', '', time()-3600);

    header("Location: login.php");
    exit;


?>