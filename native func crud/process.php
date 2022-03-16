<?php 
include 'database.php';
$db = new database();

if($_GET['method'] == 'store') {
    $nama = $_POST['nama']." - Baru";

    $db->store($nama,$_POST['alamat'],$_POST['pekerjaan']);
    header("location:index.php");
} else if ($_GET['method'] == 'update') {
    $db->update($_POST['id'],$_POST['nama'],$_POST['alamat'],$_POST['pekerjaan']);
    header("location:index.php");
} else if ($_GET['method'] == 'delete') {
    $db->delete($_GET['id']);
    header("location:index.php");
}