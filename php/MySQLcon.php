<?php

$dbHost = "localhost";
$dbName = "mysql_database";
$dbUsername = "root";
$dbPassword = "werwerwer";


try{
    $PDO = new PDO('mysql:host='.$dbHost.'; dbname='.$dbName, $dbUsername, $dbPassword);
}
catch(PDOException $connectionError){
    echo "Failed to connect to database: ".$connectionError->getMessage();
}

?>