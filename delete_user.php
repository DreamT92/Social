<?php
include "conn_db.php";

if( isset($_GET['go_delete']) && $_GET['go_delete'] == 1 ) {    

    $query = "DELETE FROM user WHERE id_user = ?";

    $stmt = $mysqli->prepare($query);
    $stmt->bind_param("s", $email, $first_name, $last_name, $username, $passw, $img);
    
    $stmt->execute();
    $affected_rows = $stmt->affected_rows;
    $stmt->close();
    
    echo "<p>Righe eliminate: $affected_rows</p>";

}