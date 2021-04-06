DROP DATABASE IF EXISTS mysql_database;
CREATE DATABASE mysql_database;
USE mysql_database;

CREATE TABLE Images(
    ID int AUTO_INCREMENT,
    name varchar(255),
    type varchar(255),
    data mediumblob,
    primary key (ID)
)engine=innodb;

SELECT * FROM Images;

