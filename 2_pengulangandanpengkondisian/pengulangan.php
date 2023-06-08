<?php
//pengulangan
// for
// while
// do.. while
// foreach
for ($i = 0; $i < 5; $i++) {
    echo "Hello for";
    echo "<br>";
}

echo "<br>";
$a = 1;
while ($a <= 5) {
    echo "hello while";
    echo "<br>";
    $a++;
}

echo "<br>";
$b = 1;
do {
    echo "Hello dowhile <br>";
    $b++;
} while ($b <= 5);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tabel</title>
    <style>
        .warna {
            background-color: lime;
        }
    </style>
</head>

<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <?php for ($i = 0; $i < 5; $i++) : ?>
            <?php if ($i % 2 == 1) : ?> 
                <!-- sisa 1 adalah ganjil 0 adalah genap -->
                <tr class="warna">
                <?php else : ?>
                <tr>
                <?php endif; ?>
                <?php for ($j = 0; $j < 6; $j++) : ?>
                    <td><?= $i ?>, <?= $j ?></td>
                <?php endfor; ?>
                </tr>
            <?php endfor; ?>
    </table>
</body>

</html>