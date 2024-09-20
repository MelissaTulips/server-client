<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

// Your response data
$response = array(
    "status" => "success",
    "message" => "Data retrieved successfully.",
    "data" => array(
        array("name" => "John Doe", "age" => 30, "email" => "johndoe@example.com"),
        array("name" => "Jane Smith", "age" => 25, "email" => "janesmith@example.com")
    )
);

echo json_encode($response);
?>
