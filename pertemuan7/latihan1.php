<?php
#Variable Scope (Lingkup Variable)

// $x = 20;
// function tampilX()
// {
//     global $x;
//     echo $x;
// }

// tampilx();

#SUPERGLOBALS
//Variabel global milik PHP
//Merupakan variable Associative

// var_dump($_SERVER);
// echo $_SERVER["SERVER_NAME"];

# $_GET

// $_GET["nama"] = "Dani Harmade";
// $_GET["nim"] = "12250310356";
// var_dump($_GET);

$mobil = [
    [
        "perusahaan" => "Mitsubishi",
        "merk" => "Pajero Sport",
        "tahun" => 2022,
        "warna" => "Hitam",
        "gambar" => "../pertemuan7/img/mobil1.jpg"
    ],
    [
        "perusahaan" => "Mitsubishi",
        "merk" => "Fortuner",
        "tahun" => 2022,
        "warna" => "Hitam",
        "gambar" => "../pertemuan7/img/mobil2.jpeg"
    ],
    [
        "perusahaan" => "Toyota",
        "merk" => "Avanza",
        "tahun" => 2022,
        "warna" => "Putih",
        "gambar" => "../pertemuan7/img/mobil3.jpg"
    ],
    [
        "perusahaan" => "Toyota",
        "merk" => "Alphard",
        "tahun" => 2022,
        "warna" => "Hitam",
        "gambar" => "../pertemuan7/img/mobil4.jpeg"
    ],
    [
        "perusahaan" => "Toyota",
        "merk" => "Rush",
        "tahun" => 2022,
        "warna" => "Putih",
        "gambar" => "../pertemuan7/img/mobil5.jpg"
    ],
    [
        "perusahaan" => "Toyota",
        "merk" => "Yaris",
        "tahun" => 2022,
        "warna" => "Kuning",
        "gambar" => "../pertemuan7/img/mobil6.png"
    ],
    [
        "perusahaan" => "Toyota",
        "merk" => "Brio",
        "tahun" => 2022,
        "warna" => "Putih",
        "gambar" => "../pertemuan7/img/mobil7.jpg"
    ]
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>

<body>
    <h1>DAFTAR MOBIL MNTP</h1>
    <ul>
        <?php foreach ($mobil as $mbl) : ?>

            <li>
                <a href="latihan2.php?merk=<?= $mbl["merk"]; ?>&perusahaan=<?= $mbl["perusahaan"]; ?>&tahun=<?= $mbl["tahun"]; ?>&warna=<?= $mbl["warna"]; ?>&gambar=<?= $mbl["gambar"]; ?>  "><?= $mbl["merk"] ?></a>
            </li>

        <?php endforeach; ?>
    </ul>
</body>

</html>