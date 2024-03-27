<?php
include "conn_db.php";

$json_dati = file_get_contents('php://input');
$dati_post = json_decode($json_dati, true);
$postId=$dati_post['postId'];

$query = "DELETE FROM post WHERE postId = ?";

$stmt = $mysqli->prepare($query);
$stmt->bind_param("i", $postId);
    
$stmt->execute();
$affected_rows = $stmt->affected_rows;
$stmt->close();
    
echo json_encode('Eliminazione effettuata con successo');
