-- mysql -u root -p
SHOW DATABASES;
CREATE DATABASE films;
SHOW DATABASES;

USE films;
SHOW TABLES;

CREATE TABLE actors (
    id integer NOT NULL UNIQUE AUTO_INCREMENT primary key ,
    name varchar(20) NOT NULL,
    surname varchar(20) NOT NULL,
    age varchar(3) NOT NULL);
CREATE TABLE films (
    id integer NOT NULL UNIQUE AUTO_INCREMENT primary key,
    name varchar(20) NOT NULL,
    release_date year );
CREATE TABLE produser (
    id integer NOT NULL UNIQUE AUTO_INCREMENT primary key,
    name varchar(20) NOT NULL,
    surname varchar(20) NOT NULL,
    famous boolean );
CREATE TABLE act_film (
    id integer NOT NULL UNIQUE AUTO_INCREMENT primary key,
    id_actor integer NOT NULL,
    id_film integer NOT NULL,
    FOREIGN KEY (id_actor) REFERENCES actors(id) ON DELETE CASCADE,
    FOREIGN KEY (id_film) REFERENCES films(id) ON DELETE CASCADE );
CREATE TABLE pro_film (
    id integer NOT NULL UNIQUE AUTO_INCREMENT primary key,
    id_produser integer NOT NULL,
    id_film integer NOT NULL,
    FOREIGN KEY (id_produser) REFERENCES produser(id) ON DELETE CASCADE,
    FOREIGN KEY (id_film) REFERENCES films(id) ON DELETE CASCADE );

DESCRIBE actors;
DESCRIBE films;
DESCRIBE produser;

INSERT INTO actors VALUES (1, 'Valeriy', 'May', '45');
INSERT INTO actors VALUES (2, 'Andrey', 'May', '43');
INSERT INTO actors VALUES (3, 'Mark', 'Walls', '41');
INSERT INTO actors VALUES (4, 'Eduard', 'Walls', '43');
INSERT INTO actors VALUES (5, 'Alex', 'Walls', '43');
INSERT INTO actors VALUES (6, 'Robert', 'May', '41');
SELECT * FROM actors;
INSERT INTO films VALUES (1, 'netflix11', '2021');
INSERT INTO films VALUES (2, 'netflix22', '2020');
INSERT INTO films VALUES (3, 'netflix33', '2021');
INSERT INTO films VALUES (4, 'netflix44', '2021');
INSERT INTO films VALUES (5, 'netflix55', '2020');
SELECT * FROM films;
INSERT INTO produser VALUES (1, 'Robert', 'May', true);
INSERT INTO produser VALUES (2, 'Mark', 'Walls', true);
INSERT INTO produser VALUES (3, 'Eduard', 'May', false);
SELECT * FROM produser;

INSERT INTO act_film VALUES (1, 2, 2);
INSERT INTO act_film VALUES (2, 2, 3);
INSERT INTO act_film VALUES (3, 2, 1);
INSERT INTO act_film VALUES (4, 1, 1);
INSERT INTO act_film VALUES (5, 1, 3);
INSERT INTO act_film VALUES (6, 3, 3);

INSERT INTO pro_film VALUES (1, 1, 2);
INSERT INTO pro_film VALUES (2, 2, 2);
INSERT INTO pro_film VALUES (3, 3, 3);


-- Запросы которые достают информацию о фильме
select f.id, f.name, af.id_actor, pf.id_produser
from pro_film as pf
inner join films as f on f.id = pf.id_film
inner join act_film af on f.id = af.id_film
where f.id = 3;

select f.id, f.name, a.name, p.name
from pro_film as pf
join films as f on f.id = pf.id_film
join act_film af on f.id = af.id_film
join actors a on af.id_actor = a.id
join produser p on pf.id_produser = p.id
where f.id = 3;


-- mysqldump -uroot -p films > films_dump.sql