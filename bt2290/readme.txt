Các bước phát triển dự án
B1) Phân tích database
- Tạo database: BT2290
create database BT2290

- Tạo tables
create table products (
	id int primary key auto_increment,
	title varchar(150) not null,
	price float,
	thumbnail varchar(500),
	content text,
	created_at datetime,
	updated_at datetime
)

create table orders (
	id int primary key auto_increment,
	fullname varchar(50),
	phone_number varchar(20),
	email varchar(150),
	address varchar(200),
	order_date date
)

create table order_detail (
	id int primary key auto_increment,
	order_id int references orders (id),
	product_id int references products (id),
	num int,
	price float
)

B2) Xay dung cau truc du an
	db
		- config.php -> cau hinh csdl
		- dbhelper.php -> ham su dung csdl
	utils
		- utility.php -> function tien ich su dung trong du -> getGet, getPost, ...
	init.php
	products.php
	details.php
	cart.php
	checkout.php

B3) Giai phap ve quan ly don hang:
	- Su dung session:
		$_SESSION['cart'] = [
			[
				'id' => 1,
				'title' => '',
				'thumbnail' => '',
				'price' => 1,
				'num': 0
			], [
				'id' => 1,
				'title' => '',
				'thumbnail' => '',
				'price' => 1,
				'num': 0
			]
		];

B4) Giai phap quan ly gio hang bang cookie
	- key -> value (key, value: int, boolean, string, char)
	- json string:
		key: cart
		value: [
			{
				"id": 1,
				"num": ???
			}, {
				"id": 2,
				"num": ???
			}, {
				"id": 3,
				"num": ???
			}
		] -> json string

		- update cart:
			- js:
				- checkout: khong j thay doi ca
				- detail.php
					
				- cart.php
			- php:
				-> Xong