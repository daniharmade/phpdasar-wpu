<?php
require '../functions.php';

$keyword = $_GET['keyword'];

$query = "SELECT * FROM mahasiswa WHERE
            nama LIKE '%$keyword%' OR
            nim LIKE '%$keyword%' OR
            email LIKE '%$keyword%' OR
            jurusan LIKE '%$keyword%'
        ";

$mahasiswa = query($query);

?>

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