<?php 
// superglobal
// variabel milik php
// sisnya index assosiative
// var_dump($_GET); // untuk url isinya masih kosong
// var_dump($_POST);// bukan dari isinya masih kosong
//var_dump($_SERVER); //bisa ambil isinya yg ada diserver kita
// echo "<br>";
// echo $_SERVER["HTTP_HOST"];


// get
$_GET["nama"] = "Andri Syahputra";
var_dump($_GET); // dan bisa tamnhakn dgn url
//cth: ?alamat= binjai
echo "<br>";
echo $_GET["nama"];
?>