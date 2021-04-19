<script>
    
    function testData(){
        var cnt = parseInt(localStorage.getItem("Counter"));
        let measurement=new Date();
        measurement = measurement.getTime();
        str=localStorage.getItem("newVal");
        if (cnt == 2) {
            str="New value: \n";  
        }
        str+= measurement+"\n";
        localStorage.setItem("newVal",str);
    }
    
</script>
<?php
// Fetch image from data based on serach input

//db connection
if(isset($_POST['search'])){
    
    $activeDB = $_POST['hiddenV'];
    
    if ($activeDB == 'mySQL'){
        require 'MySQLcon.php';
    }   
    else if ($activeDB == 'mariaDB'){
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
        if ($activeDB == 'postgreSQL'){
            // output buffering.
            ob_start();
            //This will normally output the image, but because of ob_start(), it won't.
            fpassthru($row['data']); 
            // output above is saved to $contents
            $contents = ob_get_contents(); 
            ob_end_clean();
            $image = $contents;
        }
        //convert and display image
        echo '<div style="margin-top: 50px;" class="caption"><img style= "margin-left: auto; margin-right: auto; display: block;" src="data:image/jpeg;base64,'.base64_encode($image).'"/></div>';
        
        echo '<script type="text/javascript">testData();</script>';
    }   
}

?>