<?php
$mahasiswa = [
    ["Dani Harmade", 12250310356, "Sistem Informasi", "harmade@gmail.com"],
    ["Harmade Dani", 65301305221, "Informasi Sistem", "harmadedani@gmail.com"],
    ["Harmade Aja", 122509201231, "Teknik Informatika", "harmadeaja@gmail.com"]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li><?= "Nama = " . $mhs[0]; ?></li>
            <li><?= "NIM =" . $mhs[1]; ?></li>
            <li><?= "Prodi = " . $mhs[2]; ?></li>
            <li><?= "Email =" . $mhs[3]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>

<!-- 
YANG DIPELAJARI INI ADALAH ARRAY NUMERIK
ARRAY NUMERIK : ARRAY YANG INDEX NYA ANGKA

-->