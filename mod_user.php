<?php
include "conn_db.php";

$json_dati = file_get_contents('php://input');
$dati_user = json_decode($json_dati, true);

$email = $dati_user['email'];
$firstName = $dati_user['firstName'];
$lastName = $dati_user['lastName'];
$username = $dati_user['username'];
$passw = hash('sha256', $dati_user['passw']);
$img = $dati_user['img'];
$userId=$dati_user['userId'];

$query = "UPDATE user SET email = ?, firstName = ?, lastName = ?, username = ?, passw = ?, img = ? WHERE userId = ?";    

$stmt = $mysqli->prepare($query);
$stmt->bind_param("ssssssi",
    $email, 
    $firstName, 
    $lastName,
    $username,
    $passw,
    $img,
    $userId
);

$stmt->execute();
$affected_rows = $stmt->affected_rows;
$stmt->close();
