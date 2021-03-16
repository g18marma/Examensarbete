<?php

$dbHost = "localhost:3360";
$dbName = "mariadb_database";
$dbUsername = "root";
$dbPassword = "werwerwer";


try{
    $PDO = new PDO('mysql:host='.$dbHost.'; dbname='.$dbName, $dbUsername, $dbPassword);
}
catch(PDOException $connectionError){
    echo "Failed to connect to database: ".$connectionError->getMessage();
}

?>