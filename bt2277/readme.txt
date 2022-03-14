B1) Xay dung CSDL
create database BT2277

create table category (
	id int primary key auto_increment,
	name varchar(50)
)

create table product (
	id int primary key auto_increment,
	title varchar(250) not null,
	thumbnail varchar(500),
	price float,
	content longtext,
	category_id int references category (id),
	created_at datetime,
	updated_at datetime
)

B2) Xay dung cau truc du an:
	- db
		config.php
		dbhelper.php
	- utils
		utility.php
	- admin
		~~~ theme: bootstrap -> build UI
		modules
			category
			product
		index.php
	- pages ...

B3) Phat trien chuc nang
