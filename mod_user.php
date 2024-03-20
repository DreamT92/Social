<?php
include "conn_db.php";

$email = $_POST['email'];
$first_name = $_POST['frist_name'];
$last_name = $_POST['last_name'];
$username = $_POST['username'];
$passw = hash('sha256', $_POST['passw']);
$img = $_POST['img'];

$query = "UPDATE user SET first_name = ? WHERE email = ?";   

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
$affected_rows = $stmt->affected_rows;
$stmt->close();

echo "<p>Righe modificate: $affected_rows</p>";