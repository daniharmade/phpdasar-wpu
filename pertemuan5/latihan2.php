<?php
// Pengulanga pada array
// for / foreach(pengulangan khusus array)
$angka = [2001, 2002, 2003, 2004, 2005];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }

        .clear {
            clear: both;
        }
    </style>
</head>

<body>

    <?php for ($i = 0; $i < count($angka); $i++) { ?>
        <div class="kotak"><?php echo $angka[$i]; ?></div>
    <?php } ?>

    <div class="clear"></div>
    <?php foreach ($angka as $tahun) { ?>
        <div class="kotak">
            <?php echo $tahun ?>
        </div>
    <?php } ?>

    <div class="clear"></div>
    <?php foreach ($angka as $tahun) : ?>
        <div class="kotak">
            <?= $tahun ?>
        </div>
    <?php endforeach; ?>


</body>

</html>