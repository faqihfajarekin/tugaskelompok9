<?php
// tampilan.php
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Tampilan Utama</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #4facfe, #00f2fe);
            color: #333;
            text-align: center;
            padding: 50px;
        }
        h1 {
            font-size: 2.5em;
            margin-bottom: 10px;
        }
        p {
            font-size: 1.2em;
        }
        .menu {
            margin-top: 30px;
        }
        .menu a {
            display: inline-block;
            margin: 10px;
            padding: 12px 20px;
            background-color: #fff;
            color: #333;
            text-decoration: none;
            border-radius: 8px;
            box-shadow: 0 3px 6px rgba(0,0,0,0.1);
            transition: 0.3s;
        }
        .menu a:hover {
            background-color: #333;
            color: #fff;
        }
    </style>
</head>
<body>

    <h1>Selamat Datang di Proyek Kelompok 9</h1>
    <p>Ini adalah halaman tampilan utama proyek kami</p>

    <div class="menu">
        <a href="pembuka.php">Halaman Pembuka</a>
        <a href="selamatdatang.php">Halaman Selamat Datang</a>
        <a href="penutup.php">Halaman Penutup</a>
        <a href="kaa.php">Halaman KAA</a>
    </div>

</body>
</html>