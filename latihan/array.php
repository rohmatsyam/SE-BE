<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aray</title>
</head>

<body>
    <?php
    $saya = [
        "nama" => "Rohmat Syamsul Huda",
        "domisili" => "Trenggalek",
        "univ" => "Universitas Nusantara PGRI Kediri",
        "prodi" => "Teknik Informatika",
        "motto" => ["Kopi", "Komputer", "Koneksi"],
    ]
    ?>
    <h2>Nama saya adalah <?= $saya['nama']; ?></h2>
    <h2>Domisili <?= $saya['domisili']; ?></h2>
    <h2>Asal Universitas = <?= $saya['univ']; ?></h2>
    <h2>Prodi = <?= $saya['prodi']; ?></h2>
    <h1>Jangan Lupa 3KO =
        <?php for ($i = 0; $i < 3; $i++) : ?>
            <?= $saya['motto'][$i]; ?>
        <?php endfor; ?>
    </h1>
</body>

</html>