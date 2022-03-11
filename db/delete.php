<?php
include 'koneksi.php';

$id = $_GET['id']; // from query paramater key = id

mysqli_query($conn, "DELETE FROM barang WHERE id='$id'");

header("location:index.php");
