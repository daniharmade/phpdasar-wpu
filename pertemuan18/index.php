<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
}

require 'functions.php';

# pagination
// konfigurasi
$jumlahDataPerHalaman = 4;
$jumlahData = count(query("SELECT * FROM mahasiswa"));
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
$halamanAktif = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1;
$awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;


$mahasiswa = query("SELECT * FROM mahasiswa LIMIT $awalData, $jumlahDataPerHalaman");

// Tombol cari ditekan
if (isset($_POST["cari"])) {
    $mahasiswa = cari($_POST["keyword"]);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: #f9b600;
            font-family: sans-serif;
            /* height: 180vh; */
        }

        .content-table,
        h1 {
            margin: 0 auto;
            width: 80%;
            text-align: center;
            border-collapse: collapse;
            font-family: Arial, sans-serif;
            margin-top: 2%;
        }

        .content-table th {
            background-color: #1b1c2d;
            color: #f9b600;
            font-weight: bold;
            padding: 12px;
        }

        .content-table td {
            padding: 5px;
            border-bottom: 1px solid #ccc;
        }

        .content-table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .content-table a {
            color: #007bff;
            text-decoration: none;
            font-weight: bold;
        }

        .action-btn a {
            display: inline-block;
            padding: 5px 10px;
            margin: 5px;
            border: 1px solid transparent;
            text-decoration: none;
            font-weight: bold;
            border-radius: 4px;
            transition: background-color 0.3s;
        }

        .action-btn a.edit {
            background-color: #007bff;
            color: #fff;
        }

        .tambah-btn a {
            margin-top: 2%;
            display: inline-block;
            padding: 5px 10px;
            margin-left: 10%;
            border: 1px solid transparent;
            text-decoration: none;
            font-weight: bold;
            border-radius: 4px;
            transition: background-color 0.3s;
        }

        .tambah-btn a.edit {
            background-color: #007bff;
            color: #fff;
        }

        .action-btn a.delete {
            background-color: #ff0000;
            color: #fff;
        }

        .action-btn a:hover {
            transform: scale(1.1);
        }

        .tambah-btn a:hover {
            transform: scale(1.1);
        }

        .search {
            margin: 0;
            padding: 0;
            border: 0;
            font-size: 100%;
            font: inherit;
            vertical-align: baseline;
        }

        .search {
            margin-left: 57%;
            display: flex;
            align-items: center;
        }

        .search input[type="text"] {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        .search button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin-left: 10px;
        }

        .search button:hover {
            background-color: #45a049;
        }

        .search input[type="text"]::placeholder {
            color: #aaa;
        }

        .search input[type="text"]:focus {
            outline: none;
            border-color: #1b1c2d;
            box-shadow: 0 0 5px rgba(27, 28, 45, 0.8);
        }

        .logout-btn {
            margin-top: 20px;
        }

        a.logout-btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #e74c3c;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
            position: absolute;
            top: 20px;
            right: 20px;
        }

        a.logout-btn:hover {
            background-color: #c0392b;
        }

        .pagination {
            display: flex;
            justify-content: center;
            margin-top: 5px;
        }

        .pagination a {
            color: #eaeaea;
            padding: 7px 14px;
            text-decoration: none;
            border: 1px solid #1b1c2d;
            margin: 0 4px;
        }

        .pagination a:hover {
            background-color: #1b1c2d;
        }

        .pagination .current {
            font-weight: bold;
            color: red;
            background-color: #f1f1f1;
        }

        .pagination .prev,
        .pagination .next {
            background-color: #f1f1f1;
        }
    </style>
</head>

<body>
    <a href="logout.php" class="logout-btn">Logout</a>
    <h1>Daftar Mahasiswa UIN Suska Riau</h1>
    <span class="tambah-btn">
        <a href="tambah.php" class="edit">Tambah Mahasiswa</a>
    </span>
    <br>

    <form action="" method="post" class="search">

        <input type="text" name="keyword" id="" size="35" autofocus placeholder="masukkan keyword pencarian..." autocomplete="off">
        <button type="submit" name="cari">Cari</button>

    </form>

    <!-- navigasi -->

    <table border="3" cellpadding="10" cellspacing="0" class="content-table">
        <tr>
            <th>No</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach ($mahasiswa as $row) : ?>
            <tr>
                <td><?= $i++ ?></td>
                <td>
                    <span class="action-btn">
                        <a href="ubah.php?id=<?= $row["id"]; ?>" class="edit">Ubah</a>
                        <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data?');" class="delete">Hapus</a>
                    </span>
                </td>
                <td><img src="img/<?= $row["gambar"]; ?>" alt="" width="50"></td>
                <td><?= $row["nim"]; ?></td>
                <td><?= $row["nama"]; ?></td>
                <td><?= $row["email"]; ?></td>
                <td><?= $row["jurusan"]; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <div class="pagination">
        <?php if ($halamanAktif > 1) : ?>
            <a href="?halaman=<?= $halamanAktif - 1; ?>">&laquo;</a>
        <?php endif; ?>

        <?php for ($i = 1; $i <= $jumlahHalaman; $i++) : ?>
            <?php if ($i == $halamanAktif) : ?>
                <a href="?halaman=<?= $i; ?>" style="fot-weight:bold; color: red;"><?= $i; ?></a>
            <?php else : ?>
                <a href="?halaman=<?= $i; ?>"><?= $i; ?></a>
            <?php endif; ?>
        <?php endfor; ?>

        <?php if ($halamanAktif < $jumlahHalaman) : ?>
            <a href="?halaman=<?= $halamanAktif + 1; ?>">&raquo;</a>
        <?php endif; ?>
    </div>
</body>

</html>