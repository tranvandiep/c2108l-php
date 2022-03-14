Nội dung học:
	- Giới thiệu về phpmyadmin (mysql)
	- Thiết kế 1 CSDL quản lý người dùng
	- Phát triển 1 dự án quản lý người dùng

1) Tài khoản người dùng:
	- IP: PC Name -> localhost
	- TK:
		User Name:root
		Pwd: 
	- Tạo được 1 TK mới:
		User Name: dieptv
		Pwd: F3!KcshQRe8otOjO

2) MySQL
	- CSDL: C2108L
	- Tạo 1 bảng User

create table Users (
	id int primary key auto_increment,
	fullname varchar(50),
	email varchar(150),
	password varchar(32),
	address varchar(200)
)

3) Phat trien du an ket noi PHP & MySQL