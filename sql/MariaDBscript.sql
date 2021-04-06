DROP DATABASE IF EXISTS mariadb_database;
CREATE DATABASE mariadb_database;
USE mariadb_database;

CREATE TABLE Images(
    ID int AUTO_INCREMENT,
    name varchar(255),
    type varchar(255),
    data mediumblob,
    primary key (ID)
)engine=innodb;

SELECT * FROM Images;