<?php
include 'database.php';
$db = new database();

// POST = FORM
$title = $_POST['title'];
$subTitle = $_POST['sub_title'];
$content = $_POST['content'];
$date = $_POST['date'];
$categoryId = $_POST['id_category'];
$userId = $_POST['id_user'];

$insert = $db->store($title, $subTitle, $content, $date, $categoryId, $userId);

// Membuat response
if ($insert) {
    $response = array(
        'status' => 200,
        'message' => 'Success create blog',
        'data' => ""
    );
} else {
    $response = array(
        'status' => 403,
        'message' => 'Failed create blog',
        'data' => ""
    );
}


// Memberitahu respon sebagai json
header('Content-Type: application/json');

// Mengembalikan respon dalam bentuk json
echo json_encode($response);
