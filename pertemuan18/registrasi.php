<?php
require 'functions.php';

if (isset($_POST["register"])) {
    if (registrasi($_POST) > 0) {
        echo "<script>
        alert('Akun Anda Berhasil Ditambahkan!');
        window.location.href = 'login.php';
        </script>";
    } else {
        echo mysqli_error($conn);
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Registrasi</title>
    <style>
        body {
            background-color: #f9b600;
            font-family: sans-serif;
        }

        label {
            display: block;
        }

        .regis {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            /* height: 100vh; */
        }

        h1 {
            text-align: center;
            color: #333;
        }

        form {
            max-width: 400px;
            background-color: #1b1c2d;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
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
            margin-bottom: 5px;
            color: #dcdeff;
        }

        input {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #f9b600;
            color: #1b1c2d;
            font-weight: bold;
            padding: 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
    </style>
</head>

<body>
    <h1>Halaman Registrasi</h1>
    <div class="regis">
        <form action="" method="post">
            <ul>
                <li>
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" required>
                </li>
                <li>
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" required>
                </li>
                <li>
                    <label for="password2">Konfirmasi Password</label>
                    <input type="password" name="password2" id="password2" required>
                </li>
                <li>
                    <button type="submit" name="register">Register</button>
                </li>
            </ul>
        </form>
    </div>
</body>

</html>