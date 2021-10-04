<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    getData();
    return;
}
ini_set('display_errors', 1);
error_reporting(E_ALL);

echo 'Its that we are looking for!';
function getData()
{
    try {
        $data = [
            'message' => 'Success',
            'request' => json_decode(file_get_contents('php://input'))
        ];
        echo json_encode($data);
    } catch (\Throwable $th) {
        echo [
            'message' => 'error occured',
            'error' => $th->getMessage()
        ];
    }
}
