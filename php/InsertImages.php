<?php
require 'MySQLcon.php';
    
if(isset($_POST['submit_image'])){
    $name = $_FILES['upload_image']['name'];
    $type = $_FILES['upload_image']['type'];
    $data = file_get_contents($_FILES['upload_image']['tmp_name']);
    $stmt = $PDO->prepare("INSERT INTO Images values(NULL,?,?,?)");
    $stmt-> bindParam(1,$name);
    $stmt-> bindParam(2,$type);
    $stmt-> bindParam(3,$data);
    $stmt-> execute();
}
?>