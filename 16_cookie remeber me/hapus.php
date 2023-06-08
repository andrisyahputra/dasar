<?php
session_start();
// pangil clas koneksi
require 'koneksi.php';
// cek ada session logi
if(!isset($_SESSION["login"])){
    header("Location: login.php");
    exit;
}

$id = $_GET["id"];
    
    if ( hapus($id) > 0 ){
        echo "<script>
                alert('Berhasil dihapus');
                document.location.href = 'index.php';
            </script>";
        } else {
            echo "<script>
            alert('gagal dihapus');
            document.location.href = 'index.php';
        </script>";
    }
?>