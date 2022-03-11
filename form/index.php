<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM</title>
</head>

<body>
    <form action="oke.php" method="post">
        <label>Tujuan</label>
        <br>
        <input type="radio" id="jakarta" name="tujuan" value="jakarta"><label for="jakarta">Jakarta</label>
        <br>
        <input type="radio" id="tasikmalaya" name="tujuan" value="tasikmalaya"><label for="tasikmalaya">Tasikmalaya</label>
        <br>
        <input type="radio" id="garut" name="tujuan" value="garut"><label for="garut">Garut</label>
        <br>
        <input type="radio" id="tangerang" name="tujuan" value="tangerang"><label for="tangerang">Tangerang</label>
        <br>
        <label for="jumlah_tiket">Masukkan Jumlah Tiket :</label>
        <input type="number" name="jumlah_tiket" id="jumlah_tiket">
        <button type="submit">Kirim</button>
    </form>
</body>

</html>