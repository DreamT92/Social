<?php
    include "conn_db.php";
    
    if ( !isset($_SESSION['logged']) ) {

        if( isset($_POST['go_login']) && $_POST['go_login'] == 1 ) {
            
            $passw=md5($_POST['passw']);
            
            $query = "SELECT * FROM user WHERE username = ? AND passw = ?";
            $stmt = $mysqli->prepare($query);
            $stmt->bind_param("ss", $_POST['username'], $passw); 
            $stmt->execute();

            $result_usr = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
            $stmt->close();

            if ( is_array($result_usr) && count($result_usr) == 1 ) {
                echo "Ciao ". $result_usr[0]['username'];

                $_SESSION['logged'] = 1;

            } 
             else {
                echo "Nessun utente trovato";
            }

        } else {
        ?>
            <!--Login-->
        <?php
        }

    } 
?>
