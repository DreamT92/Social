<?php
include "conn_db.php";

$json_dati = file_get_contents('php://input');
$dati_user = json_decode($json_dati, true);
$userId=$dati_user['userId'];

$query = "DELETE FROM user WHERE userId = ?";

$stmt = $mysqli->prepare($query);
$stmt->bind_param("i", $userId);
    
$stmt->execute();
$affected_rows = $stmt->affected_rows;
$stmt->close();
    
echo json_encode('Eliminazione effettuata con successo');
