<?php

function connexion()
{
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname= "portfolio";

    try {
        $idcon = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
        return $idcon;
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        return FALSE;
        exit();
    }
}
?>