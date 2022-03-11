<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DB</title>
</head>

<body>
    <?php
    include("koneksi.php");
    $result = mysqli_query($conn, "SELECT * FROM barang");
    ?>
    <a href="create.php">Tambah data baru</a>
    <table border="1">
        <tr>
            <td>id</td>
            <td>Nama Barang</td>
            <td>Harga</td>
            <td>Kuantitas</td>
            <td>Opsi</td>
        </tr>
        <?php while ($barang = mysqli_fetch_assoc($result)) : ?>
            <tr>
                <td><?= $barang['id']; ?></td>
                <td><?= $barang['nama_barang']; ?></td>
                <td><?= $barang['harga']; ?></td>
                <td><?= $barang['kuantitas']; ?></td>
                <td>
                    <a class="edit" href="edit.php?id=<?php echo $barang['id']; ?>">Edit</a> |
                    <a class="hapus" href="delete.php?id=<?php echo $barang['id']; ?>">Hapus</a>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>
</body>

</html>