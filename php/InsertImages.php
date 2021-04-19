<?php

// Insert images to dabase  
if(isset($_POST['submit_image'])){
    $activeDB = $_POST['hiddenV'];
    $name = $_FILES['upload_image']['name'];
    $type = $_FILES['upload_image']['type'];
    $data = file_get_contents($_FILES['upload_image']['tmp_name']);
    
    if ($activeDB == 'mySQL'){
        require 'MySQLcon.php';
    }   
    else if ($activeDB == 'mariaDB'){
        require 'MariaDBcon.php';
    }
    //pg require data to be converted into hexadecimal representation
    else {
        $dbconn = pg_connect("host=localhost dbname=postgresql_database user=postgres password=werwerwer");
        $escaped = bin2hex( $data );
        pg_query( "INSERT INTO images (id, name, type, data) VALUES (default, ('$name'), ('$type'), decode('{$escaped}' , 'hex'))" );
        
    }
    if ($activeDB != 'postgreSQL'){
        $stmt = $PDO->prepare("INSERT INTO Images values(default,?,?,?)");
        $stmt-> bindParam(1,$name);
        $stmt-> bindParam(2,$type);
        $stmt-> bindParam(3,$data);
        $stmt-> execute();
    } 
}

?>