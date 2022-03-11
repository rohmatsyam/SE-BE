<?php
include("koneksi.php");
$id = $_GET["id"];
$query_mysql = mysqli_query($conn, "SELECT * FROM barang WHERE id='$id'");
$nomor = 1;
while ($data = mysqli_fetch_array($query_mysql)) {
?>
    <form action="update.php" method="post">
        <table>
            <tr>
                <td>Nama Barang</td>
                <td>
                    <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                    <input type="text" name="nama_barang" value="<?php echo $data['nama_barang'] ?>">
                </td>
            </tr>
            <tr>
                <td>harga</td>
                <td><input type="text" name="harga" value="<?php echo $data['harga'] ?>"></td>
            </tr>
            <tr>
                <td>kuantitas</td>
                <td><input type="text" name="kuantitas" value="<?php echo $data['kuantitas'] ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan"></td>
            </tr>
        </table>
    </form>
<?php } ?>