<?php
    require '../koneksi.php';
    $keyword = $_GET["keyword"];
    $query = "SELECT * FROM mancity
                WHERE 
                nama LIKE '%$keyword%' OR
                posisi LIKE '%$keyword%' OR
                asal LIKE '%$keyword%' OR
                no_punggung LIKE '%$keyword%'
                ";
    $mancity = query($query);

    // var_dump($mancity);
?>

<table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>No</th>
                <th>Aksi</th>
                <th>Nama</th>
                <th>Posisi</th>
                <th>Asal</th>
                <th>No Punggung</th>
                <th>Gambar</th>
            </tr>
            
            <?php $nourut = 1; ?>
            <?php foreach($mancity as $pemain) : ?>
            <tr>
                <td><?= $nourut ?></td>
                <td>
                    <a href="hapus.php?id=<?= $pemain["id"]; ?>" onclick="return confirm('yakin dihapus?')">Hapus</a> | 
                    <a href="ubah.php?id=<?= $pemain["id"]; ?>">Ubah</a>
                </td>
                <td><?= $pemain["nama"] ?></td>
                <td><?= $pemain["posisi"] ?></td>
                <td><?= $pemain["asal"] ?></td>
                <td><?= $pemain["no_punggung"] ?></td>
                <td>
                    <img src="gambar/<?= $pemain["gambar"] ?>" alt="<?= $pemain["gambar"] ?>" width="100" height="100">
                </td>
            </tr>
            <?php $nourut++ ?>
            <?php endforeach; ?>
        </table>