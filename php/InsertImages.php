<?php

// Insert images to dabase  
if(isset($_POST['submit_image'])){
    $hiddenV = $_POST['hiddenV'];
    
    if ($hiddenV == 'mySQL'){
        require 'MySQLcon.php';
    }   
    else if ($hiddenV == 'mariaDB'){
        require 'MariaDBcon.php';
    }
    else {
        require 'PostgreSQLcon.php'; 
    }
    $name = $_FILES['upload_image']['name'];
    $type = $_FILES['upload_image']['type'];
    $data = file_get_contents($_FILES['upload_image']['tmp_name']);
    if ($hiddenV == 'postgreSQL') {
        $escaped = pg_escape_bytea($data);
    }
    $stmt = $PDO->prepare("INSERT INTO Images values(default,?,?,?)");
    $stmt-> bindParam(1,$name);
    $stmt-> bindParam(2,$type);
    if ($hiddenV == 'postgreSQL') {
        $stmt-> bindParam(3,$escaped);
    }
    else {
        $stmt-> bindParam(3,$data); 
    }
    $stmt-> execute();
    
}

?>