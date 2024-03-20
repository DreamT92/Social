<?php
session_start();

define('_DBNAME_', 'social');
define('_DBUSERNAME_', 'root');
define('_DBPASSWORD_', '');
define('_DBHOST_', 'localhost');

$mysqli = new mysqli(_DBHOST_, _DBUSERNAME_, _DBPASSWORD_, _DBNAME_);
if ($mysqli->connect_error) {
    die('Errore di connessione (' . $mysqli->connect_errno . ') '. $mysqli->connect_error);
} else {
    //echo 'Connesso: ' . $mysqli->host_info . "\n";
}


//define('_IMGFOLDER_', 'img');