<?php
//Cek apakah tidak ada data di $_GET
if (
    !isset($_GET["merk"]) ||
    !isset($_GET["perusahaan"]) ||
    !isset($_GET["tahun"]) ||
    !isset($_GET["warna"]) || !isset($_GET["gambar"])
) {
    //redirect = memindahkan user dari halmn ke healamn lain
    header("Location:latihan1.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mobil</title>
</head>

<body>
    <ul>
        <!-- <li><img src="../pertemuan7/img/mobil6.png" alt=""></li> -->
        <li><?= $_GET["merk"]; ?></li>
        <li><?= $_GET["perusahaan"]; ?></li>
        <li><?= $_GET["tahun"]; ?></li>
        <li><?= $_GET["warna"]; ?></li>
        <li><img src="<?= $_GET["gambar"]; ?>" alt=""></li>
    </ul>
    <a href="latihan1.php">Kembali ke daftar Mobil</a>
</body>

</html>