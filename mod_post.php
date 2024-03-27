<?php
include "conn_db.php";

$json_dati = file_get_contents('php://input');
$dati_post = json_decode($json_dati, true);

$descriptionPost = $dati_post['descriptionPost'];

$query = "UPDATE post SET descriptionPost = ? WHERE postId = ?";    

$stmt = $mysqli->prepare($query);
$stmt->bind_param("si",
    $descriptionPost, 
    $postId
);

$stmt->execute();
$affected_rows = $stmt->affected_rows;
$stmt->close();

echo json_encode('Modifica utente avvenuta con successo');
