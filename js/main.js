$(document).ready(function(){
    
    var dbType = 'mySQL';
    var dbName = 'MySQL';

    $("#toggleMysql").click(function(){
        
        dbType = 'mySQL';
        dbName = 'MySQL';
        
        document.getElementById("footer").innerHTML = "Active Database: " + dbName;
    });
    
    $("#toggleMariadb").click(function(){
        
        dbType = 'mariaDB';
        dbName = 'MariaDB';
        
        document.getElementById("footer").innerHTML = "Active Database: " + dbName;
    });
    
    $("#togglePostgresql").click(function(){
        
        dbType = 'postgreSQL';
        dbName = 'PostgreSQL';
        
        document.getElementById("footer").innerHTML = "Active Database: " + dbName;
    });
          //your code here
});