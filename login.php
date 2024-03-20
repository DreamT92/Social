<?php
    include "conn_db.php";

    $json_dati = file_get_contents('php://input');
    $dati_user = json_decode($json_dati, true);
    $username=$dati_user['username'];
    $passw=md5($dati_user['passw']);
            
    $query = "SELECT * FROM user WHERE username = ? AND passw = ?";
    $stmt = $mysqli->prepare($query);
    $stmt->bind_param("ss", $username, $passw); 
    $stmt->execute();

    $result_usr = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    $stmt->close();

    if ( is_array($result_usr) && count($result_usr) == 1 ) {
        //echo "Ciao ". $result_usr[0]['username'];
        $json_user = json_encode($result_usr);
        return $json_user;

    } 
    else {
        //echo "Nessun utente trovato";
        $json_user = json_encode(0);
        return $json_user;
    }
?>
