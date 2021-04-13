<?php
// Fetch image from data based on serach input

//db connection
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
    $query = "SELECT data FROM Images where id='$id'";
    $stmt = $PDO->prepare($query);
    $stmt->execute();

    while ($row = $stmt->fetch()){ 
        $image = $row['data'];
        if ($hiddenV == 'postgreSQL'){
            // output buffering.
            ob_start();
            //This will normally output the image, but because of ob_start(), it won't.
            fpassthru($row['data']); 
            // output above is saved to $contents
            $contents = ob_get_contents(); 
            ob_end_clean();
            $image = $contents;
        }
        //display image
        echo '<div style="margin: auto; margin-top: 50px;" class="caption"><img style= "margin-left: auto; margin-right: auto; display: block;" src="data:image/jpeg;base64,'.base64_encode($image).'"/></div>';  
    }   
}

?>