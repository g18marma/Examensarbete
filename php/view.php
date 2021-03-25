<?php

// Fetch image from data based on serach input

if(isset($_POST['search'])){
    
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
    
    $id = $_POST['searchInput'];
    $query = "SELECT data FROM Images where ID='$id'";
    $stmt = $PDO->prepare($query);
    $stmt->execute();

    while ($row = $stmt->fetch()){ 
        echo '<div style="margin: auto; margin-top: 50px;" class="caption"><img style= "margin-left: auto; margin-right: auto; display: block;" src="data:image/jpeg;base64,'.base64_encode($row['data']).'"/></div>';
    }   
}

?>