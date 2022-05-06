-- mysql -u root -p
-- DATABASES;
CREATE DATABASE City;

USE City;
-- SHOW TABLES;

CREATE TABLE city (
    id integer NOT NULL UNIQUE AUTO_INCREMENT primary key ,
    name varchar(20) NOT NULL )DEFAULT CHARSET UTF8;

CREATE TABLE city1 (
    id integer NOT NULL UNIQUE AUTO_INCREMENT primary key ,
    name varchar(20) NOT NULL) DEFAULT CHARSET UTF8;

INSERT INTO city (name) VALUES ('Kharkov');
INSERT INTO city (name) VALUES ('Vinnitsa');
INSERT INTO city (name) VALUES ('Alchevsk');
INSERT INTO city (name) VALUES ('Kyiv');
INSERT INTO city (name) VALUES ('Varva');
INSERT INTO city (name) VALUES ('Akimovka');
INSERT INTO city (name) VALUES ('Antonovka');
INSERT INTO city (name) VALUES ('Akhtyrka');
INSERT INTO city (name) VALUES ('Boyarka');
INSERT INTO city (name) VALUES ('Velyatino');
INSERT INTO city (name) VALUES ('Obolon');
INSERT INTO city (name) VALUES ('Nizhyn');
INSERT INTO city (name) VALUES ('Nikolaev');
INSERT INTO city (name) VALUES ('Novgorodka');
INSERT INTO city (name) VALUES ('Evpatoria');

-- SHOW VARIABLES LIKE 'character_set_client';
-- set names utf8;
-- select * from city ;
-- SELECT * FROM city WHERE name Like 'a%';
-- mysqldump -uroot -p City > City_dump.sql
