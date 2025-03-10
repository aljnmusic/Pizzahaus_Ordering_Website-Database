create database pizzahaus;

use pizzahaus;

create table customer(
	customer_id int primary key,
    customer_name varchar(255),
    email varchar(255),
    phone varchar(255),
    address varchar(255)
);

ALTER TABLE customer
MODIFY customer_id int AUTO_INCREMENT;

create table orders(
	order_id int primary key,
    customer_id int, 
    foreign key (customer_id)
    references
    customer (customer_id),
    order_date date,
    total_amount decimal(5, 2),
    order_status varchar(255),
    payment_status varchar(255)
);

ALTER TABLE orders
MODIFY order_id int AUTO_INCREMENT;


create table product(
	product_id int primary key,
    name varchar(255),
    category varchar(255),
    price decimal(4, 2),
    rating int
);

ALTER TABLE product
MODIFY product_id int AUTO_INCREMENT;


create table order_item(
	order_item_id int primary key,
    order_id int,
    foreign key (order_id)
    references
    orders (order_id),
    product_id int,
    foreign key (product_id)
    references
    product (product_id),
	quantity int
);

ALTER TABLE order_item
MODIFY order_id INT;


create table product_raw_material(
	product_id int,
    foreign key (product_id) references product(product_id),
    material_id int,
    foreign key (material_id) references raw_material(material_id),
    quantity int
);

create table raw_material(
	material_id int primary key,
    material_name varchar(255),
    quantity int,
    supplier_id int
);

ALTER TABLE raw_material
MODIFY material_id int AUTO_INCREMENT;

create table invoice(
	invoice_id int primary key,
    order_id int,
    foreign key (order_id) references order_item (order_id),
    amount decimal(4, 2),
    payment_method varchar(255),
    payment_status varchar(255),
    issue_date date
);

ALTER TABLE invoice
MODIFY invoice_id int AUTO_INCREMENT;

create table notification(
	notification_id int primary key,
    order_id int,
    foreign key (order_id) references order_item (order_id),
    status varchar(255),
    timestamp datetime
);

create table employee(
	employee_id int primary key,
    name varchar(255),
    role varchar(255),
    hire_date date
);

ALTER TABLE employee
MODIFY employee_id int AUTO_INCREMENT;

create table equipment(
	equipment_id int primary key,
    name varchar(255),
    type varchar(255),
    status varchar(255)
);

ALTER TABLE equipment
MODIFY equipment_id int AUTO_INCREMENT;

use pizzahaus;
select *
from customer;

alter table customer
drop column password;

drop table notification;
drop table product_raw_material;
drop table raw_material;
drop table equipment;

alter table product
drop column rating;

ALTER TABLE customer ADD COLUMN password VARCHAR(255);

ALTER TABLE notification ADD COLUMN customer_id INT;
ALTER TABLE notification ADD FOREIGN KEY (customer_id) REFERENCES customer(customer_id);

ALTER TABLE product_raw_material ADD COLUMN used_quantity INT;

select *
from customer;

use pizzahaus;

DELETE FROM customer WHERE customer_id < 45;
ALTER TABLE customer AUTO_INCREMENT = 1;

SELECT AUTO_INCREMENT FROM information_schema.TABLES 
WHERE TABLE_SCHEMA = 'pizzahaus' AND TABLE_NAME = 'customer';
TRUNCATE TABLE customer;

SET FOREIGN_KEY_CHECKS = 0;
TRUNCATE TABLE customer;
SET FOREIGN_KEY_CHECKS = 1;
ALTER TABLE customer AUTO_INCREMENT = 1;

ALTER TABLE customer MODIFY customer_id INT NOT NULL AUTO_INCREMENT;


