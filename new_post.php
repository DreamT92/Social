<?php
include "conn_db.php";

$json_dati = file_get_contents('php://input');
$dati_post = json_decode($json_dati, true);

$descriptionPost = $dati_post['descriptionPost'];
$userIdPost = $dati_post['userIdPost'];

$query = "INSERT INTO post (descriptionPost, userIdPost) VALUES (?, ?)";
$stmt = $mysqli->prepare($query);

$stmt->bind_param("si",
    $email, 
    $userIdPost, 
);
 
$stmt->execute();
$result = $stmt->insert_id;
$stmt->close();

echo json_encode('Post aggiunto avvenuta con successo');

