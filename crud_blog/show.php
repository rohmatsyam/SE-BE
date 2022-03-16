<?php 
include 'database.php';
$db = new database();

// Mengambil data
$id = $_GET['id'];
$data = $db->getSelectedBarang($id);

// Membuat response
if ($data) {
    $response = array(
        'status' => 200,
        'message' => 'Success get blog with id = '.$id,
        'data' => $data[0]
    );
} else {
    $response = array(
        'status' => 403,
        'message' => 'Failed get blog with id = '.$id,
        'data' => ""
    );
}


// Memberitahu respon sebagai json
header('Content-Type: application/json');

// Mengembalikan respon dalam bentuk json
echo json_encode($response);
