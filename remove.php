<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "Is Post Method";
    return;
}
echo 'some response';
return [
    'status' => 200 ,
    'message' => 'Success'
];