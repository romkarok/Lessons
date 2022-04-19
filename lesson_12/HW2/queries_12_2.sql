-- mysql -u root -p
-- DATABASES;
CREATE DATABASE ProductList;

USE ProductList;
-- SHOW TABLES;

CREATE TABLE product_list (
    id integer NOT NULL UNIQUE AUTO_INCREMENT primary key ,
    name varchar(20) NOT NULL,
    price varchar(20) NOT NULL,
    season varchar(10) NOT NULL);

INSERT INTO product_list( name, price, season) VALUES ('Banana', '100', 'Winter');
-- INSERT INTO product_list( name, price, season) VALUES ('Mandarin', '70', 'Spring');
-- INSERT INTO product_list( name, price, season) VALUES ('Apple', '50', 'Spring');
-- INSERT INTO product_list( name, price, season) VALUES ('Kiwi', '170', 'Autumn');
-- INSERT INTO product_list( name, price, season) VALUES ('Watermelon', '130', 'Summer');
-- INSERT INTO product_list( name, price, season) VALUES ('Melon', '110', 'Summer');

select * from product_list as pl
where season = 'Summer';

-- mysqldump -uroot -p ProductList > ProductList_dump.sql