<?php
//untuk mulai
    session_start();
    // hapus nersihkan sesion secara seluruh
    session_destroy();
    $_SESSION = [];
    session_unset();

    header("Location: login.php");
    exit;


?>