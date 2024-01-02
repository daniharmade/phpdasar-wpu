<?php
// $mahasiswa = [
//     ["Dani Harmade", 12250310356, "Sistem Informasi", "harmade@gmail.com"],
//     ["Harmade", 122503120102, "Teknik Informatika", "emadehar@gmail.com"]
// ]

// Array Associative
// Definis sama speerti array numerik, cuma keynya adalah string yang kita buat
$mahasiswa = [
    [
        "nim" => 12250310356,
        "nama" => "Dani Harmade",
        "prodi" => "Sistem Informasi",
        "email" => "harmade@gmail.com",
        "gambar" => "../pertemuan6/img/fotoya1.jpg"
    ],
    [
        "nama" => "Harmade Dani",
        "nim" => 12250310356,
        "prodi" => "Informatika",
        "email" => "madedanz@gmail.com",
        "gambar" => "../pertemuan6/img/fotoya1.jpg"
    ]
];

// echo $mahasiswa[1]["tugas"][1];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Nama Mahasiswa</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach ($mahasiswa as $mhs) : ?>

        <ul>
            <li>Nama : <?= $mhs["nama"] ?></li>
            <li>NIM : <?= $mhs["nim"] ?></li>
            <li>Prodi : <?= $mhs["prodi"] ?></li>
            <li>Email : <?= $mhs["email"] ?></li>
            <li>Foto : <br><img src="<?= $mhs["gambar"] ?>" alt=""></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>