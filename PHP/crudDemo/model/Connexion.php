<?php

function connexion()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "clients";
    $port = "3308"; //port

    try {
        $idcon = new PDO("mysql:host=$servername;port=$port;dbname=$dbname;charset=utf8", $username, $password);
        return $idcon;
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        return FALSE;
        exit();
    }
}
