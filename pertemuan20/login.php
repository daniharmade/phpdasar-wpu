<?php
session_start();
require 'functions.php';

// cek cookie
if (isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
    $id = $_COOKIE['id'];
    $key = $_COOKIE['key'];

    // ambil username berdasarkan id
    $result = mysqli_query($conn, "SELECT username FROM user WHERE id = $id");
    $row = mysqli_fetch_assoc($result);

    // cek cookie dan username
    if ($key === hash('sha256', $row['username'])) {
        $_SESSION['login'] = true;
    }
}

if (isset($_SESSION["login"])) {
    header("Location: index.php");
    exit;
}

if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

    // cek username
    if (mysqli_num_rows($result) === 1) {

        // cek password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {
            // set session
            $_SESSION["login"] = true;

            // cek remember me
            if (isset($_POST['remember'])) {
                // buat cookie
                setcookie('id', $row['id'], time() + 60);
                setcookie('key', hash('sha256', $row['username']), time() + 60);
            }

            header("Location: index.php");
            exit;
        }
    }

    $error = true;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>

    <style>
        /* HALAMAN LOGIN */

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: sans-serif;
            min-height: 100vh;
            background-color: #f9b600;
        }

        .container-login {
            /* margin-right: auto; */
            width: 700px;
            height: 470px;
            display: flex;
            max-width: 850px;
            background-color: #1b1c2d;
            border-radius: 10px;
            box-shadow: 0 10px 15px;
        }

        .login {
            width: 400px;
        }

        form {
            width: 250px;
            margin: 60px;
        }

        h1 {
            margin: 20px;
            text-align: center;
            font-weight: bolder;
            text-transform: uppercase;
            color: #f9b600;
        }

        hr {
            border-top: 2px solid #1b1c2d;
        }

        p {
            text-align: center;
            margin: 10px;
            color: #afb1d1;
        }

        .right img {
            margin: 100px 60px 60px 20px;
            width: 300px;
            /* height: 100%; */
        }

        form label {
            display: block;
            font-size: 15px;
            font-weight: 600;
            padding: 5px;
            color: #dcdeff;
        }

        .formlog {
            width: 100%;
            margin: 2px;
            border: none;
            outline: none;
            padding: 8px;
            border-radius: 5px;
            border: 1px solid #f9b600;
        }

        ul li .btn-login {
            margin-top: 16px;
            color: #1b1c2d;
            background-color: #f9b600;
            font-weight: bold;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
            margin: 2px;
            border: none;
            outline: none;
            padding: 8px;
            border-radius: 5px;
            border: 1px solid #f9b600;
        }

        .login ul li {
            list-style: none;
        }

        .right img {
            width: 75%;
            height: auto;
        }

        .login li p {
            display: inline;
            /* Membuat teks tetap sejajar dengan tautan */
            margin-right: 5px;
            /* Memberikan sedikit jarak di sebelah kanan teks */
            color: #999;
        }

        .login li a {
            color: #3498db;
            font-weight: bold;
            text-decoration: none;
        }

        .remember {
            margin-left: 2%;
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .remember label {
            /* margin-left: 5px; */
            font-size: 16px;
            color: #eaeaea;
        }
    </style>
</head>

<body>
    <div class="container-login">
        <div class="login">
            <form action="" method="post">
                <h1>Login</h1>
                <hr />
                <p>Silahkan Melakukan Login!</p>
                <?php if (isset($error)) : ?>
                    <p style="color:red; font-style: italic; ">Username / Password Yang Anda Masukkan Salah</p>
                <?php endif; ?>
                <ul>
                    <li>
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" class="formlog">
                    </li>
                    <li>
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="formlog">
                    </li>

                    <li>
                        <button type="submit" name="login" class="btn-login">Login</button>
                    </li>

                    <li class="remember">
                        <input type="checkbox" name="remember" id="remember">
                        <label for="remember">Remember Me </label>
                    </li>

                    <li>

                        <p>Belum Punya Akun? </p> <a href="registrasi.php">Sign Up</a>
                    </li>
                </ul>


            </form>
        </div>
        <div class="right">
            <img src="./assets/uin.png" alt="" />
        </div>
    </div>
</body>

</html>