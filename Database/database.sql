CREATE DATABASE MASTER_SHOP;
USE MASTER_SHOP;

CREATE TABLE users (
id          int(255) auto_increment not null,
name        varchar(100) not null,
surname     varchar(255),
email       varchar(255) not null,
password    varchar(255) not null,
role        varchar(20),
image       varchar(255),
CONSTRAINT pk_users PRIMARY KEY(id),
CONSTRAINT uq_email UNIQUE(email)
)ENGINE=InnoDb;

INSERT INTO users VALUES (null, 'Admin' , 'Admin' , 'admin@admin.com', 'password' , 'admin', null);

CREATE TABLE categories (
id          int(255) auto_increment not null,
name        varchar(100) not null,
CONSTRAINT pk_categories PRIMARY KEY(id)
)ENGINE=InnoDb;

INSERT INTO categories VALUES(null ,'short sleeve');
INSERT INTO categories VALUES(null ,'long sleeve');
INSERT INTO categories VALUES(null ,'sweatshirts');

CREATE TABLE products (
id          int(255) auto_increment not null,
category_id int(255) not null,
name        varchar(100) not null,
description text,
price       float(100,2) not null,
stock       int(255) not null,
sale        varchar(2),
date        date not null,
image       varchar(255),
CONSTRAINT pk_categories PRIMARY KEY(id),
CONSTRAINT fk_product_category FOREIGN KEY (category_id) REFERENCES categories(id)
)ENGINE=InnoDb;

CREATE TABLE orders (
id          int(255) auto_increment not null,
user_id     int(255) not null,
province    varchar(100) not null,
town        varchar(100) not null,
adress      varchar(255) not null,
cost        float (200,2) not null,
status      varchar(20) not null,
date        date ,
hour        time ,
CONSTRAINT pk_orders PRIMARY KEY(id),
CONSTRAINT fk_order_user FOREIGN KEY (user_id) REFERENCES users(id)
)ENGINE=InnoDb;

CREATE TABLE orders_lines (
id          int(255) auto_increment not null,
order_id    int (255) not null,
product_id  int (255) not null,
units       int (255) not null,
CONSTRAINT pk_orders_lines PRIMARY KEY (id),
CONSTRAINT fk_order_lines FOREIGN KEY(order_id) REFERENCES orders(id),
CONSTRAINT fk_product_lines FOREIGN KEY(product_id) REFERENCES products(id)
)ENGINE=InnoDb;


