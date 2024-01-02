<?php
// CEK APAKAH TOMBOL SUBMIT SUDAH DI TEKAN ATAU BELUM
if (isset($_POST["submit"])) {
    // CEK USERNAME DAN PASSWORD
    if ($_POST["username"] == "admin" && $_POST["password"] == "123") {
        // JIKA BENAR LANJUT KE HALAMAN ADMIN
        header("Location: admin.php");
        exit;
    } else {
        // JIKA SALAH TAMPILKAN PESAN KESALAHAN
        $error = true;
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN ADMIN</title>
</head>

<body>
    <h1>Login Admin</h1>
    <?php if (isset($error)) : ?>
        <p style="color: red; font-style: italic;">Username / Password Salah</p>
    <?php endif; ?>

    <ul>
        <form action="" method="post">
            <li>
                <label for="username">Username : </label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">Password : </label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <button type="submit" name="submit">Login</button>
            </li>
        </form>
    </ul>
</body>

</html>