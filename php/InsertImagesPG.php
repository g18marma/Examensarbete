<?php 

require 'PostgreSQLcon.php';

if(isset($_POST['submit_image'])){
    $name = $_FILES['upload_image']['name'];
    $type = $_FILES['upload_image']['type'];
    $data = file_get_contents($_FILES['upload_image']['tmp_name']);
    $escaped = pg_escape_bytea($data);
    $stmt = $PDO->prepare("INSERT INTO Images values(default,?,?,?)");
    $stmt-> bindParam(1,$name);
    $stmt-> bindParam(2,$type);
    $stmt-> bindParam(3,$escaped);
    $stmt-> execute();
    
}

?>