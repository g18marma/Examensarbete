<?php
require 'MySQLcon.php';

// Fetch image from data based on serach input

if(isset($_POST['search'])){

    $id = $_POST['searchInput'];
    $query = "SELECT data FROM Images where ID='$id'";
    $stmt = $PDO->prepare($query);
    $stmt->execute();

    while ($row = $stmt->fetch()){ 
        echo '<div style="margin: auto; margin-top: 50px;" class="caption"><img style= "margin-left: auto; margin-right: auto; display: block;" src="data:image/jpeg;base64,'.base64_encode($row['data']).'"/></div>';
    }   
}

?>