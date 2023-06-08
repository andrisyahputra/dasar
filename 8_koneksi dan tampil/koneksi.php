<?php
        // koneksi databse
        $conn = mysqli_connect("localhost","root","","tes_pemain");
        // ambil data
        // $result = mysqli_query($conn, "SELECT * FROM mancity");
        
        // ambil data (fetch) dari object result
        // mysqli_fetch_row() //bernilai index
        // mysqli_fetch_assoc() //bernilai string
        // mysql_fetch_array() //bernilai keduanya double 
        // mysql_fetch_object() //bernilai obejct
        // sering gunakan assoc
    
        // mengambil data semua gunakan while
        // while ($pemain = mysqli_fetch_assoc($result)){
        //     var_dump($pemain);
        // }

        // pakai function query
        function query($query){
                global $conn;
                $result = mysqli_query($conn, $query);
                $rows = [];
                while ($row = mysqli_fetch_assoc($result)) {
                        $rows[] = $row;
                };

                return $rows;

        }
?>