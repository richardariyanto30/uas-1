<?php
$title = "Website SIEGA";

$nama = "Selamat datang di Website SIEGA";
$deskripsi = "SIEGAAA!!!.";
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f2f2f2;
            margin: 0;
            padding: 0;
        }
        header {
            background: #1e90ff;
            color: white;
            padding: 15px;
            text-align: center;
        }
        main {
            padding: 25px;
            text-align: center;
        }
        footer {
            background: #1e90ff;
            color: white;
            text-align: center;
            padding: 10px;
            margin-top: 40px;
        }
    </style>
</head>
<body>

    <header>
        <h1><?= $title; ?></h1>
    </header>

    <main>
        <h2><?= $nama; ?></h2>
        <p><?= $deskripsi; ?></p>
    </main>

    <footer>
        &copy; <?php echo date("Y"); ?> Website SIEGA.
    </footer>

</body>
</html>
