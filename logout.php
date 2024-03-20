<?php
include "conn_db.php";

if( isset($_POST['go_logout']) && $_POST['go_logout'] == 1 ) {
    session_unset();        
    session_destroy();
    echo "Utente scollegato";
} 
