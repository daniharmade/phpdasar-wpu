<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
}

require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

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
    <!-- JQUERY -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- JS -->
    <script src="js/script.js"></script>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: #f9b600;
            font-family: sans-serif;
            height: 180vh;
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
            border: 1px solid black;
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
            /* margin-bottom: 2%; */
            display: inline-block;
            padding: 5px 10px;
            margin-left: 10%;
            border: 1px solid transparent;
            text-decoration: none;
            font-weight: bold;
            border-radius: 4px;
            transition: background-color 0.3s;
            /* position: absolute; */
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

        /* Reset gaya default formulir */
        .search {
            margin: 0;
            padding: 0;
            border: 0;
            font-size: 100%;
            font: inherit;
            vertical-align: baseline;
        }

        /* Gaya umum untuk formulir */
        .search {
            /* float: left; */

            margin-left: 57%;
            display: flex;
            align-items: center;
        }

        /* Gaya untuk input teks */
        .search input[type="text"] {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        /* Gaya untuk tombol cari */
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

        /* Efek hover pada tombol cari */
        .search button:hover {
            background-color: #45a049;
        }

        /* Stil placeholder */
        .search input[type="text"]::placeholder {
            color: #aaa;
        }

        /* Autofokus pada input teks */
        .search input[type="text"]:focus {
            outline: none;
            border-color: #1b1c2d;
            box-shadow: 0 0 5px rgba(27, 28, 45, 0.8);
        }

        /* Style untuk tombol logout */
        .logout-btn {
            margin-top: 20px;
        }

        a.logout-btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #e74c3c;
            /* Warna latar merah (sesuaikan dengan keinginan Anda) */
            color: #fff;
            /* Warna teks putih */
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
            position: absolute;
            top: 20px;
            /* Jarak dari atas */
            right: 20px;
            /* Jarak dari kanan */
        }

        /* Efek hover pada tombol logout */
        a.logout-btn:hover {
            background-color: #c0392b;
            /* Warna latar merah yang sedikit lebih gelap saat dihover */
        }

        .loader {
            width: 32px;
            margin-left: 2%;
            display: none;
        }


        .signatory-info {
            display: none;
        }

        a.cetak {
            margin-top: 10px;
            display: inline-block;
            padding: 7px 12px;
            background-color: #45a049;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s;
            margin-left: 10.5%;
        }


        @media print {

            /* Menyembunyikan tombol logout saat mencetak */
            a.logout-btn,
            .search,
            .tambah-btn,
            .aksi,
            a.cetak {
                display: none;
            }

            .content-table th {
                color: black;
                /* border: 3px solid black; */
            }

            .signatory-info {
                display: block;
                margin-left: 60%;
                margin-top: 8%;
            }

            .signatory-info .rektor {
                margin-bottom: 30%;
            }

            .signatory-info p {
                margin: 8px 0;
            }

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

        <input type="text" name="keyword" id="keyword" size="35" autofocus placeholder="masukkan keyword pencarian..." autocomplete="off">
        <button type="submit" name="cari" id="tombol-cari">Cari</button>
        <img src="assets/ZKZx.gif" alt="" class="loader">

    </form>
    <a href="cetak.php" class="cetak" target="_blank">Cetak</a>

    <div id="container">
        <table border="3" cellpadding="10" cellspacing="0" class="content-table">
            <tr>
                <th>No</th>
                <th class="aksi">Aksi</th>
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
                    <td class="aksi">
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
    </div>

    <!-- TTD -->
    <div class="signatory-info">
        <p>Mengetahui,</p>
        <p class="rektor">Rektor UIN Suska Riau</p>
        <p>Prof. Dr. Khairunnas Rajab, M.Ag.<br>197208282006041002</p>
    </div>

</body>

</html>