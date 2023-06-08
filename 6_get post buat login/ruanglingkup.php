<?php 
// variabel scope
$x = 10;

function cetak(){
    // $x = 20;
    global $x;
    echo $x;
}

// pebeda variabel didalm dan diluar
// didalam tidak bisa akses variabel diluar
// kecuali pakai global $x
cetak();
echo "<br>";
echo $x;
?>