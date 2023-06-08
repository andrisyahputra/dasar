<?php 
// membuat array
//membuat satu array
$nama = "Andri Syahputra <br>";
echo $nama;

// ini akan menimpa aray yg sama
$hari = "kamis";
$hari = "jumat";
echo $hari . "<br>";

// membuat array yg banyak
// array lama
$bulan = array("januari", "february");
// untuk melihat array gunakan 
var_dump($bulan);
echo "<br>";

// array terbaru
$coba = [
    123,
    "andri",
    false
];
var_dump($coba);
echo "<br>";

// menampilkan array
// gunakan echo maka eror karena gk bisa emua ditampilkan
// array seperti wadah
// gunakan vardump atau print_r
print_r($coba);
echo "<br>";

// untuk menampilkan satu array
// array dimulai dari 0
echo $coba[1];

// untuk menambahkan element
$bulan[] = "maret";
$bulan[] = "april";
var_dump($bulan);
// sudah ditambhakn maret



?>