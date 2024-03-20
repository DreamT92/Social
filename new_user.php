<?php
include "conn_db.php";

if( isset($_POST['go_insert']) && $_POST['go_insert'] == 1 ) {      
$email = $_POST['email'];
$first_name = $_POST['frist_name'];
$last_name = $_POST['last_name'];
$username = $_POST['username'];
$passw = hash('sha256', $_POST['passw']);
$img = $_POST['img'];

$query = "INSERT INTO user (email, first_name, last_name, username, passw, img) VALUES (?, ?, ?, ?, ?, ?)";
$stmt = $mysqli->prepare($query);

$stmt->bind_param("ssssss",
    $email, 
    $first_name, 
    $last_name,
    $username,
    $passw,
    $img
);
 
$stmt->execute();
$result = $stmt->insert_id;
$stmt->close();
}