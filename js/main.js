$(document).ready(function(){
    

    //Switch databases
    var activeDB = localStorage.getItem('activeDB');
    if (activeDB == null){
        var dbType = 'mySQL';
        activeDB = dbType;
    }
    dbType = activeDB;
    document.getElementById("hiddenForm").value = dbType;
    document.getElementById("footer").innerHTML = "Active Database: " + activeDB;
    
    $("#toggleMysql").click(function(){
        
        dbType = 'mySQL';
        dbName = 'MySQL';
        alert("Active Database: MySQL");
        localStorage.setItem('activeDB', dbType);
        document.getElementById("footer").innerHTML = "Active Database: " + dbType;
        document.getElementById("hiddenForm").value = dbType;
    });
    
    $("#toggleMariadb").click(function(){
        
        dbType = 'mariaDB';
        dbName = 'MariaDB';
        alert("Active Database: MariaDB");
        localStorage.setItem('activeDB', dbType);
        document.getElementById("footer").innerHTML = "Active Database: " + dbType;
        document.getElementById("hiddenForm").value = dbType;
    });
    
    $("#togglePostgresql").click(function(){
        
        dbType = 'postgreSQL';
        dbName = 'PostgreSQL';
        alert("Active Database: PostgreSQL");
        localStorage.setItem('activeDB', dbType);
        document.getElementById("footer").innerHTML = "Active Database: " + dbType;
        document.getElementById("hiddenForm").value = dbType;
    });
    
});