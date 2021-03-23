<?php
require 'MySQLcon.php';

$stat = $PDO->prepare("SELECT * FROM Images");
$stat->execute();
    while ($row = $stat->fetch()){ 
        echo '<div class="caption"><img src="data:image/jpeg;base64,'.base64_encode($row['data']).'"/></div>';

    }
?>