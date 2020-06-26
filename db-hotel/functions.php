<?php

include 'db-config.php';

function connetti_db() {
    $conn = new mysqli(SERVERNAME, USERNAME, PASSWORD, DB_NAME);
    return $conn;
}


?>
