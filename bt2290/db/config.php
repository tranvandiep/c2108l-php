<?php
define('HOST', 'localhost');
define('DATABASE', 'BT2290');
define('USERNAME', 'root');
define('PASSWORD', '');

const SQL_CREATE_DATABASE = 'create database IF NOT EXISTS '.DATABASE;
const SQL_CREATE_TABLE_PRODUCTS = 'create table IF NOT EXISTS products (
	id int primary key auto_increment,
	title varchar(150) not null,
	price float,
	thumbnail varchar(500),
	content text,
	created_at datetime,
	updated_at datetime
)';

const SQL_CREATE_TABLE_ORDERS = 'create table IF NOT EXISTS orders (
	id int primary key auto_increment,
	fullname varchar(50),
	phone_number varchar(20),
	email varchar(150),
	address varchar(200),
	order_date datetime
)';

const SQL_CREATE_TABLE_ORDER_DETAIL = 'create table IF NOT EXISTS order_detail (
	id int primary key auto_increment,
	order_id int references orders (id),
	product_id int references products (id),
	num int,
	price float
)';