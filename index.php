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
            <div class="title" id="uploadPage">
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
        <div class="image-form">
            <form method="POST" action="#" enctype="multipart/form-data" class="sendForm">
                <div class="upload">
                    <label for="uploadButton" class="custom-file-upload" id="chooseImage">
                        Choose Image
                    </label>   
                    <input id="uploadButton" type="file" multiple="multiple" accept="image/*" name="upload_image"/>
                    <input type="text" id="hiddenForm" name="hiddenV" value=""/>
                </div>
                <div class="submit">
                    <input id="submitButton" type="submit" name="submit_image" value="Sumbit"/>
                </div>
            </form>
        </div>
        <footer id="footer"> Active Database: MySQL</footer>
    </body>
<?php
    include ('php/insertImages.php');
?>    
</html>