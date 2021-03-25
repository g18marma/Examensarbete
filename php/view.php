<?php
require 'MySQLcon.php';

// Fetch image from data based on serach input

if(isset($_POST['search'])){

    $id = $_POST['searchInput'];
    $query = "SELECT data FROM Images where ID='$id'";
    $stmt = $PDO->prepare($query);
    $stmt->execute();

    while ($row = $stmt->fetch()){ 
        echo '<div class="caption"><img src="data:image/jpeg;base64,'.base64_encode($row['data']).'"/></div>';
    }   
}

?>