<?php 
$dbHost = "localhost";
$dbName = "postgresql_database";
$dbUsername = "postgres";
$dbPassword = "werwerwer";
try{
    $PDO = new PDO('pgsql:host='.$dbHost.'; dbname='.$dbName, $dbUsername, $dbPassword);
}
catch(PDOException $connectionError){
    echo "Failed to connect to database: ".$connectionError->getMessage();
}
?>