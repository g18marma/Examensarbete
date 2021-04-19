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
                <a href="index.php"><h1>Upload Image</h1></a>
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
            <div class="title" id="submitPage">
                <a href="searchForm.php"><h1>Search Image</h1></a>
            </div>
        </div>
        <div class="search">
            <form action="" method="POST">
                <input type="text" id="searchTerm" class="search-term" name="searchInput"/>
                <input type="text" id="hiddenForm" name="hiddenV" value=""/>
                <input type="submit" id="searchButton" class="searchButton" name="search" value="Search">
            </form>    
        </div>
        <footer id="footer"> Active Database: MySQL</footer>
    </body>
<?php
    require 'php/view.php';
?>    
</html>