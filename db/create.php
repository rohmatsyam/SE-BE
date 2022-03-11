<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INSERT</title>
</head>

<body>
    <form action="store.php" method="post">
        <label for="nama_barang">Nama Barang : </label>
        <input type="text" name="nama_barang" id="nama_barang">
        <br>
        <label for="harga">Harga : </label>
        <input type="number" name="harga" id="harga">
        <br>
        <label for="kuantitas">Kuantitas : </label>
        <input type="number" name="kuantitas" id="kuantitas">
        <button type="submit" value="simpan">Kirim</button>
    </form>
</body>

</html>