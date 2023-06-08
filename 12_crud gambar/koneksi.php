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
        // uploup gambar
        function uploup(){
                // return false;
                $namagambar = $_FILES['gambar']['name'];
                $ukuranfile = $_FILES['gambar']['size'];
                $eror = $_FILES['gambar']['error'];
                $tmpname = $_FILES['gambar']['tmp_name'];

                // cek apakah gambar sudah diuploud
                if ($eror === 4 ){
                        echo "<script>
                        alert('Gambar silakan ditambah');
                    </script>";
                    return false;
                }

                // cek extension
                $extensionGambarValid = ["jpg","png","jpeg","gif"];
                $extensionGambar = explode('.', $namagambar);
                $extensionGambar = strtolower(end($extensionGambar)); //ambil yg diakhir
                // cth andri.jpg = ['andri', 'jpg'];

                if (!in_array($extensionGambar, $extensionGambarValid)){
                        echo "<script>
                        alert('Bukan gambar');
                    </script>";
                    return false;
                }

                // cek gambar besar lebih 1mb
                if ($ukuranfile > 1000000){
                        echo "<script>
                        alert('Gambar terlalu besar');
                    </script>";
                    return false;
                }

                // generategambar
                $namagambarbaru = uniqid();
                $namagambarbaru .= '.';
                $namagambarbaru .= $extensionGambar;
                // var_dump($namagambarbaru);
                // die;

                // lolos pengecekan, gambar siap diuploup
                move_uploaded_file($tmpname, 'gambar/' .$namagambarbaru);

                return $namagambarbaru;

        }

        // untuk tambah
        function tambah($data){
                global $conn;
                // ditampung element
        $nama = htmlspecialchars($data["nama"]);
        $posisi = htmlspecialchars($data["posisi"]);
        $asal = htmlspecialchars($data["asal"]);
        $nopunggung = htmlspecialchars($data["no_punggung"]);
        // $gambar = htmlspecialchars($data["gambar"]);
        // var_dump($_POST);

        // uloup gambar
        $gambar = uploup();
        if (!$gambar){
                return false;
        }

    $query = "INSERT INTO mancity 
                VALUES
                ('','$nama','$posisi','$asal','$nopunggung','$gambar')";

        mysqli_query($conn,$query);

        //kembalikan angka berhasil 0 atau 1
        return mysqli_affected_rows($conn);
        }

        // untuk hapus
        function hapus($id){
                global $conn;
                mysqli_query($conn, "DELETE FROM mancity WHERE id = $id");
                return mysqli_affected_rows($conn);
        }

        function ubah($data){
                global $conn;
                // ditampung element
                $id = $data["id"];
                $nama = htmlspecialchars($data["nama"]);
                $posisi = htmlspecialchars($data["posisi"]);
                $asal = htmlspecialchars($data["asal"]);
                $nopunggung = htmlspecialchars($data["no_punggung"]);
                $gambarlama = htmlspecialchars($data["gambarlama"]);
                // var_dump($_POST);

                if( $_FILES["gambar"]["error"] === 4){
                        $gambar = $gambarlama;
                } else {
                        $gambar = uploup();
                }

    $query = "UPDATE mancity 
                SET
                nama = '$nama',
                posisi = '$posisi',
                asal = '$asal',
                no_punggung = '$nopunggung',
                gambar = '$gambar' 
                WHERE id = $id;
                ";

        mysqli_query($conn,$query);

        //kembalikan angka berhasil 0 atau 1
        return mysqli_affected_rows($conn);
        }

        function cari($keyword){
                $query = "SELECT * FROM mancity
                WHERE 
                nama LIKE '%$keyword%' OR
                posisi LIKE '%$keyword%' OR
                asal LIKE '%$keyword%' OR
                no_punggung LIKE '%$keyword%'
                ";
        return query($query);

        }
?>