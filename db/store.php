<?php 
include("koneksi.php");
$nama_barang = $_POST["nama_barang"];
$harga = $_POST["harga"];
$kuantitas = $_POST["kuantitas"];

mysqli_query($conn,"INSERT INTO barang (nama_barang,harga,kuantitas) VALUES ('$nama_barang','$harga','$kuantitas')");

header("location:index.php");
