<?php
    // date
    // untuk menampilkan layar format tertentu
    echo date("l  d-M-Y");
    echo "<br>";


    // time
    // timetamp
    // menghitung hari pada 100 kedapan
    // detik, menit , jam, hari
    echo date("l", time()+60*60*24*100);
    echo "<br>";
    // untuk mendur
    echo date("l d-M-Y", time()-60*60*24*100);
    echo "<br>";

    // mktime
    // membuat detik sendiri seperti diskon
    // mktime(0,0,0,0,0,0,0)
    // jam, menit, detik, bulan , tangal,tahun
    //untuk melihat hari apa dari tanggal ini
    echo date("l", mktime(0,0,0,9,22,1999));
    echo "<br>";

    // format string bukan angka kebalikan
    echo date("l",strtotime("22 sep 1999"));
    echo "<br>";

    // banyak lagi
    //strleng
    // jumlah string
    echo strlen("Andri Syahputra");
    echo "<br>";

    // strlen
    // persamaan jika sama akan nilai 0
    $var1 = "Hello";
$var2 = "Hello";
echo strcmp($var1, $var2);
echo "<br>";

// explode untuk memecahkan
$pizza  = "piece1 piece2 piece3 piece4 piece5 piece6";
$pieces = explode(" ", $pizza);
echo $pieces[0];
echo "<br>";

// htmlspecialchars
//untuk tidak bisa masukan sintax aneh aneh
$new = htmlspecialchars("<a href='test'>Test</a>");
echo $new . "<br>";

// vardump untuk debuging
var_dump("Andri Syahputra");

// isset 
// ketika kosong

// empty
// isinya kosong

// die berhenti sejenak

// sleep untuk membuat sleep atau off sementara


