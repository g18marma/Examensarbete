DROP TABLE IF EXISTS Images;

CREATE TABLE Images(
    ID SERIAL PRIMARY KEY,
    name varchar(255),
    type varchar(255),
    data bytea
);

SELECT * FROM Images;