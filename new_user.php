<?php
include "conn_db.php";

$json_dati = file_get_contents('php://input');
$dati_user = json_decode($json_dati, true);

$email = $dati_user['email'];
$first_name = $dati_user['firstName'];
$last_name = $dati_user['lastName'];
$username = $dati_user['username'];
$passw = hash('sha256', $_POST['passw']);
$img = $dati_user['img'];

$query = "INSERT INTO user (email, firstName, lastName, username, passw, img) VALUES (?, ?, ?, ?, ?, ?)";
$stmt = $mysqli->prepare($query);

$stmt->bind_param("ssssss",
    $email, 
    $firstName, 
    $lastName,
    $username,
    $passw,
    $img
);
 
$stmt->execute();
$result = $stmt->insert_id;
$stmt->close();
