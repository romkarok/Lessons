-- mysql -u root -p
SHOW DATABASES;
CREATE DATABASE films;
SHOW DATABASES;

USE films;
SHOW TABLES;
CREATE TABLE actors (
    id int UNSIGNED NOT NULL UNIQUE AUTO_INCREMENT,
    name varchar(20) NOT NULL,
    surname varchar(20) NOT NULL,
    age varchar(3) NOT NULL );
CREATE TABLE films (
    id int UNSIGNED NOT NULL UNIQUE AUTO_INCREMENT,
    name varchar(20) NOT NULL,
    release_date year );
CREATE TABLE produser (
    id int UNSIGNED NOT NULL UNIQUE AUTO_INCREMENT,
    name varchar(20) NOT NULL,
    surname varchar(20) NOT NULL,
    famous boolean );
DESCRIBE actors;
DESCRIBE films;
DESCRIBE produser;

INSERT INTO actors VALUES (1, 'Valeriy', 'May', '45');
INSERT INTO actors VALUES (2, 'Andrey', 'May', '43');
INSERT INTO actors VALUES (3, 'Mark', 'Walls', '41');
INSERT INTO actors VALUES (4, 'Eduard', 'Walls', '43');
SELECT * FROM actors;
INSERT INTO films VALUES (1, 'netflix', '2021');
INSERT INTO films VALUES (2, 'netflix11', '2020');
INSERT INTO films VALUES (3, 'netflix22', '2021');
SELECT * FROM films;
INSERT INTO produser VALUES (1, 'Robert', 'May', true);
INSERT INTO produser VALUES (2, 'Mark', 'Walls', true);
INSERT INTO produser VALUES (3, 'Eduard', 'May', false);
SELECT * FROM produser;

SELECT id, name, famous FROM produser WHERE famous= true;

SELECT * FROM actors WHERE age = '43';

UPDATE films SET release_date = '2022' WHERE release_date = '2021';

-- mysqldump -uroot -p films > films_dump.sql