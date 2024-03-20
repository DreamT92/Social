<?php
include "conn_db.php";

$json_dati = file_get_contents('php://input');
$dati_user = json_decode($json_dati, true);
$email = $dati_user['email'];
$first_name = $dati_user['firstName'];
$last_name = $dati_user['lastName'];
$username = $dati_user['username'];
$passw = hash('sha256', $dati_user['passw']);
$img = $dati_user['img'];

$query = "UPDATE user SET firstName = ? WHERE email = ?";   

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
$affected_rows = $stmt->affected_rows;
$stmt->close();

echo "<p>Righe modificate: $affected_rows</p>";