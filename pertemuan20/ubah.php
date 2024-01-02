<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
}

require "functions.php";

// ambil data di URL
$id = $_GET["id"];

// query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa where id=$id")[0];

// Cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {
    // cek apakah data berhasil diubah atau tidak
    if (ubah($_POST) > 0) {
        echo "
        <script>
        alert('Data Berhasil Diubah!');
        document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('Data Gagal Diubah!');
        
        </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Mahasiswa</title>
    <style>
        body {
            font-family: sans-serif;
            background-color: #f9b600;
            margin: 0;
            padding: 0;

        }

        form {
            background-color: #1b1c2d;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-left: 40%;
            width: 19%;
        }

        ul li label {
            color: #ccc;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        li {
            margin-bottom: 15px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-left: 63%;
        }

        button:hover {
            background-color: #45a049;
        }

        .gambar input {
            background-color: #ccc;
            cursor: pointer;
        }

        .gambar p {
            color: #ccc;
            font-size: 10px;
        }
    </style>
</head>

<body>
    <h1>Edit Data Mahasiswa</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
        <input type="hidden" name="gambarLama" value="<?= $mhs["gambar"]; ?>">
        <ul>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama" required value="<?= $mhs["nama"] ?>">
            </li>

            <li>
                <label for="nim">NIM : </label>
                <input type="text" name="nim" id="nim" required value="<?= $mhs["nim"] ?>">
            </li>

            <li>
                <label for="email">Email : </label>
                <input type="email" name="email" id="email" required value="<?= $mhs["email"] ?>">
            </li>

            <li>
                <label for="jurusan">Jurusan : </label>
                <input type="text" name="jurusan" id="jurusan" required value="<?= $mhs["jurusan"] ?>">
            </li>

            <li class="gambar">
                <label for="gambar">Gambar : </label>
                <img src="img/<?= $mhs["gambar"]; ?>" width="50"> <br>
                <input type="file" name="gambar" id="gambar">
                <p>Size Maksimal 1MB</p>
            </li>

            <li>
                <button type="submit" name="submit">Edit Data!</button>
            </li>
        </ul>
    </form>
</body>

</html>