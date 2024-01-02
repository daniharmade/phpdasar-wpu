<?php

$mobil = [
    [
        "perusahaan" => "Mitsubishi",
        "merk" => "Pajero Sport",
        "tahun" => 2022,
        "warna" => "Hitam",
        "gambar" => "../pertemuan6/img/mobil1.jpg"
    ],
    [
        "perusahaan" => "Mitsubishi",
        "merk" => "Fortuner",
        "tahun" => 2022,
        "warna" => "Hitam",
        "gambar" => "../pertemuan6/img/mobil2.jpeg"
    ],
    [
        "perusahaan" => "Toyota",
        "merk" => "Avanza",
        "tahun" => 2022,
        "warna" => "Putih",
        "gambar" => "../pertemuan6/img/mobil3.jpg"
    ],
    [
        "perusahaan" => "Toyota",
        "merk" => "Alphard",
        "tahun" => 2022,
        "warna" => "Hitam",
        "gambar" => "../pertemuan6/img/mobil4.jpeg"
    ],
    [
        "perusahaan" => "Toyota",
        "merk" => "Rush",
        "tahun" => 2022,
        "warna" => "Putih",
        "gambar" => "../pertemuan6/img/mobil5.jpg"
    ],
    [
        "perusahaan" => "Toyota",
        "merk" => "Yaris",
        "tahun" => 2022,
        "warna" => "Hitam",
        "gambar" => "../pertemuan6/img/mobil6.png"
    ],
    [
        "perusahaan" => "Toyota",
        "merk" => "Brio",
        "tahun" => 2022,
        "warna" => "Hitam",
        "gambar" => "../pertemuan6/img/mobil7.jpg"
    ]
];

// echo $mahasiswa[1]["tugas"][1];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mobil</title>
</head>

<body>
    <h1>Daftar Mobil</h1>

    <?php foreach ($mobil as $mbl) : ?>

        <ul>
            <li>Nama : <?= $mbl["perusahaan"] ?></li>
            <li>NIM : <?= $mbl["merk"] ?></li>
            <li>Prodi : <?= $mbl["tahun"] ?></li>
            <li>Email : <?= $mbl["warna"] ?></li>
            <li>Foto : <br><img src="<?= $mbl["gambar"] ?>" alt=""></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>