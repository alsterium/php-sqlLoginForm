CREATE DATABASE passDB; 

CREATE TABLE passDB.list(
    id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    user_name VARCHAR(50),
    password VARCHAR(50)
);

USE passDB;
INSERT INTO list VALUES(1,'root','root');
INSERT INTO list VALUES(2,'admin','admin');
INSERT INTO list VALUES(3,'foo','bar');