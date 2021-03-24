<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
        <script src="js/main.js"></script>
        <title>Application</title>
    </head>
    <body>
        <div class="header">
            <div class="title">
                <h1>Search Image</h1>
            </div>
            <div>
                <table class="dbs">
                    <tr>
                        <td id="toggleMysql" href="#">MySQL</td>
                        <td id="toggleMariadb"href="#">MariaDB</td>
                        <td id="togglePostgresql"href="#">PostgreSQL</td>
                    </tr>
                </table>
            </div>    
        </div>
        
        <div class="search">
            <input type="text" class="searchTerm" placeholder="What are you looking for?"/>
            <button type="submit" class="searchButton">Search</button>

        </div>
        <footer id="footer"> Active Database: MySQL</footer>
    </body>
<?php

    // include ('php/view.php'); 
?>    
</html>