<?php
include 'database.php';
$db = new database();

// POST = FORM
$id = $_GET['id'];

$title = $_POST['title'];
$subTitle = $_POST['sub_title'];
$content = $_POST['content'];
$date = $_POST['date'];
$categoryId = $_POST['id_category'];
$userId = $_POST['id_user'];

$insert = $db->update($id, $title, $subTitle, $content, $date, $categoryId, $userId);

// Membuat response
if ($insert) {
    $response = array(
        'status' => 200,
        'message' => 'Success update blog',
        'data' => ""
    );
} else {
    $response = array(
        'status' => 403,
        'message' => 'Failed update blog',
        'data' => ""
    );
}


// Memberitahu respon sebagai json
header('Content-Type: application/json');

// Mengembalikan respon dalam bentuk json
echo json_encode($response);
