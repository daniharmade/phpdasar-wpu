<?php
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");


### ambil data dari database / query data mahasiswa
// $result = mysqli_query($conn, "SELECT * FROM mahasiswa");
### cek apakah ada eror saat pemanggilan data dari database
// if (!$result) {
//     echo mysqli_error($conn);
// }
// var_dump($result);

### ambil data (fetch) mahasiswa dari object result
// mysqli_fetch_row() = mengembalikan array numerik (angka)
// mysqli_fetch_assoc() = mengembalikan array huruf (kalimat)
// mysqli_fetch_array() = mengembalikan array huruf dan angka
// mysqli_fetch_object() = 

// while ($mhs = mysqli_fetch_assoc($result)) {
//     var_dump($mhs["nama"]);
// }

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
        }

        /* Mengatur tampilan tabel agar berada di tengah halaman */
        .content-table,
        h1 {
            margin: 0 auto;
            width: 80%;
            text-align: center;
            border-collapse: collapse;
            font-family: Arial, sans-serif;
            margin-top: 2%;
        }

        /* Mengatur tampilan header tabel */
        .content-table th {
            background-color: #1b1c2d;
            color: #f9b600;
            font-weight: bold;
            padding: 12px;
        }

        /* Mengatur tampilan sel dalam tabel */
        .content-table td {
            padding: 5px;
            border-bottom: 1px solid #ccc;
        }

        /* Mengatur warna latar belakang setiap baris tabel bergantian */
        .content-table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        /* Mengatur warna teks pada link */
        .content-table a {
            color: #007bff;
            text-decoration: none;
            font-weight: bold;
        }

        /* TOMBOL AKSIIII */

        /* Mengatur tampilan tombol aksi */
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

        /* Mengatur warna latar belakang tombol "Edit" menjadi biru */
        .action-btn a.edit {
            background-color: #007bff;
            color: #fff;
        }

        /* Mengatur warna latar belakang tombol "Hapus" menjadi merah */
        .action-btn a.delete {
            background-color: #ff0000;
            color: #fff;
        }

        /* Hover efek untuk tombol aksi */
        .action-btn a:hover {
            /* Warna abu-abu saat hover */
            transform: scale(1.1);
        }
    </style>
</head>

<body>
    <h1>Daftar Mahasiswa </h1>
    <span class="action-btn">
        <a href="tambah.php" class="edit">Tambah Mahasiswa</a>
    </span>
    <br><br>
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
                        <a href="" class="edit">Ubah</a>
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
</body>

</html>