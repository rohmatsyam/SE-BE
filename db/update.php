<?php 
include("koneksi.php");
$id = $_POST['id'];
$nama_barang = $_POST["nama_barang"];
$harga = $_POST["harga"];
$kuantitas = $_POST["kuantitas"];

mysqli_query($conn, "UPDATE barang SET nama_barang='$nama_barang', harga='$harga', kuantitas='$kuantitas' WHERE id='$id'");

header("location:index.php");
